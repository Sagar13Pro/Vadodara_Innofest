<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProposalValidator;
use App\Models\ProblemStatement;
use Illuminate\Http\Request;
use App\Models\Proposal;
use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;

class viewsController extends Controller
{
    //views for blade
    public function DemoDay()
    {
        return view('programs.demoday');
    }
    public function Hackathon()
    {
        $statement = ProblemStatement::all();
        return view('programs.hackathon', compact('statement'));
    }
    public function Login()
    {
        return view('programs.register.login');
    }
    public function Dashboard($id = null)
    {
        $proposals = Proposal::select('*')
            ->where('teamLeaderEmail', session('session_mail'))
            ->get();
        return view('programs.register.user.dashboard', compact('proposals'));
    }
    public function Apply($id = NULL)
    {
        if (!is_null($id)) {
            $detail = ProblemStatement::find($id);
            $users = User::select('*')
                ->where('email', session('session_mail'))
                ->get();
            return view('programs.register.user.apply', compact('detail', 'users'));
        }
        return view('programs.register.user.apply');
    }
    public function ApplyLogin($id)
    {
        session()->put('session_id', $id);
        return redirect(route('hackathon.logins'));
    }
    public function Profile()
    {
        $profiles  = User::select('*')
            ->where('email', session('session_mail'))
            ->get();
        return view('programs.register.user.profile', compact('profiles'));
    }
    public function Edit(Proposal $id)
    {
        return view('programs.register.user.edit', compact('id'));
    }
    public function Logout()
    {
        if (session()->has('session_mail')) {
            session()->flush();
        }
        return redirect(route('hackathon.logins'));
    }

    //For Proposal Submission
    public function ProposalStore(ProposalValidator $request, $id = null)
    {
        if (!is_null($id)) {

            if ($request->hasFile('image')) {
                $images = $request->file('image');
                if (count($images) > 2) {
                    return redirect()
                        ->back()
                        ->with('error', 'Maximum 2 files are only allowed for uploading')
                        ->withInput($request->all());
                }
            }
            try {
                $value = Proposal::all()->last();
                $teamNameExist = Proposal::select('*')->where('teamName', $request->_teamName)->count();
                if ($teamNameExist == 0) {
                    if (is_null($value)) {
                        /*json used because when db is empty itss value is null.Hence obj->property required, using json encode decode we can implement that*/
                        $encoded = json_encode(['teamID' => 'Team_1']);
                        $value = json_decode($encoded);
                    }
                    $proposal = Proposal::create([
                        'teamID' => $value->teamID,
                        'teamName' => $request->_teamName,
                        'teamLeaderName' => $request->_teamLeaderName,
                        'teamLeaderEmail' => $request->_teamLeaderEmailId,
                        'teamLeaderMobile' => $request->_teamLeaderContactNo,
                        'mentorName' => $request->_mentorsName,
                        'mentorEmail' => $request->_mentorEmail,
                        'mentorMobile' => $request->_mentorContactNo,
                        'institute' => $request->_institute,
                        'teamMembers' => $request->_teamMembers,
                        'problemID' => $request->_complaintId,
                        'problemTitle' => $request->_problemTitle,
                        'problemCategory' => $request->_problemCategory,
                        'problemDescription' => $request->_problemDescription,
                        'solutionBrief' => $request->_solutionBrief,
                        'methodology' => $request->_technoUsed,
                        'timeline' => $request->_timelineDev,
                    ]);
                } else {
                    return redirect()
                        ->back()
                        ->with('error', 'Team Name has been already taken.Please try another!!')
                        ->withInput($request->all());
                }
            } catch (Exception $error) {
                dd($error);
                $proposal = false;
            }
            if ($proposal) {
                $this->StoreImage($request, $value);
                session()->pull('session_id');
                return redirect(route('user.dashboard'))
                    ->with(['message' => 'Your Propsal Submission has been Successfully registered.']);
            } else {
                return redirect()
                    ->back()
                    ->with('error', 'Something just got wrong. Please Try Again!!')
                    ->withInput($request->all());
            }
        }
    }
    //image storing function along with image name
    public function StoreImage($request, $value)
    {
        if ($request->hasFile('image')) {
            if (count($request->file('image')) == 1) {
                $proposal = Proposal::all()->last();
                $file =  $request->file('image')[0];
                Proposal::where('teamID', $proposal->teamID)->update([
                    'image1Name' => $proposal->teamID . '__A.' . $file->getClientOriginalExtension(),
                ]);
                $proposal = Proposal::all()->last();
                $file->storeAs('images', $proposal->image1Name);
            } else {
                $proposal = Proposal::all()->last();
                $file1 =  $request->file('image')[0];
                $file2 =  $request->file('image')[1];
                Proposal::where('teamID', $proposal->teamID)->update([
                    'image1Name' => $proposal->teamID . '__A.' . $file1->getClientOriginalExtension(),
                    'image2Name' => $proposal->teamID . '__B.' . $file2->getClientOriginalExtension()
                ]);
                $proposal = Proposal::all()->last();
                $file1->storeAs('images', $proposal->image1Name);
                $file2->storeAs('images', $proposal->image2Name);
            }
        }
    }
    //updating the proposal
    public function Update($id, Request $request)
    {
        try {
            $proposal = Proposal::where('id', $id)
                ->Update([
                    'solutionBrief' => $request->_solutionBrief,
                    'methodology' => $request->_technoUsed,
                    'timeline' => $request->_timelineDev,
                ]);
        } catch (Exception $error) {
            //dd($error);
            $proposal = false;
        }
        if ($proposal) {
            return redirect(route('proposal.edit', $id))
                ->with('message', 'Your proposal has been updated successfully.');
        } else {
            return redirect()
                ->back()
                ->with('error', 'There something got wrong.Try Again!!');
        }
    }
    //Propsal Pop-up Modal Viewing
    public function ProposalModal(Proposal $id)
    {
        return response()
            ->json(['success' => true, 'data' => $id]);
    }
    //Profile Updating
    public function ProfileEdit(Request $request)
    {
        try {
            $user = User::where('email', session('session_mail'))
                ->update([
                    'firstName' => $request->fname,
                    'lastName' => $request->lname,
                    'state' => $request->state,
                    'city' => $request->city,
                    'gender' => $request->gender,

                ]);
        } catch (Exception $error) {
            $user = $error;
        }
        if (is_numeric($user)) {
            return redirect()
                ->back()
                ->with('message', 'Your profile has been updated successfullly.');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Please fill all field');
        }
    }

    //Hackathon view Modal
    public function ViewModal(ProblemStatement $id)
    {
        return response()
            ->json([
                'success' => true,
                'statement' => $id
            ]);
    }
    //Registration with Google
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        //dd($user->avatar);
        if (User::where('email', $user->user['email'])->count() == 0) {
            try {
                $stored = User::create([
                    'firstName' => $user->user["given_name"],
                    'lastName' => $user->user["family_name"],
                    'email' => $user->user["email"],
                    'Avatar' => $user->avatar,
                    'email_verified' => $user->user["verified_email"],

                ]);
            } catch (Exception $error) {
                //dd($error);
                $stored = false;
            }
            if ($stored) {
                session()->put('session_mail', $user->user['email']);
                return redirect(route('user.dashboard'));
            } else {
                return redirect()
                    ->back()
                    ->with('error', 'Something got wrong');
            }
        } else {
            if (session()->has('session_id')) {
                session()->put('session_mail', $user->user['email']);
                session()->put('session_name', $user->name);
                return redirect(route('user.apply', session('session_id')));
            } else {
                session()->put('session_mail', $user->user['email']);
                session()->put('session_name', $user->name);
                return redirect(route('user.dashboard'));
            }
        }
    }
    public function redirectToProviderGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallbackGithub()
    {
        $user = Socialite::driver('github')->user();
        dd($user);
    }
}
