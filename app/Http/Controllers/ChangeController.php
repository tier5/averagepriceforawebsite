<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Item;
use App\Process;

class ChangeController extends Controller
{
    public function getMarketingPages($step)
    {
    	$step = base64_decode($step);
        $this->backwardCalculator($step);
    	return view('marketing-pages', ['parent' => 10]);
    }
    public function postLastPageMarketingPages(Request $request) {
        $redirect_status = $this->dynamicPost($request);
        if ($redirect_status) {
            return redirect()->route('summary');
        }
        else
        {
            echo "Some Error occured please try again later!";
        }
    }
    public function changePeopleLogin($step) {
        $step = base64_decode($step);
        $this->backwardCalculator($step);
        return view('peopleLogin', ['parent' => 10]);
    }

    public function postLastPagePeopleLogin(Request $request) {
        $redirect_status = $this->dynamicPost($request);
        if ($redirect_status) {
            return redirect()->route('summary');
        }
        else
        {
            echo "Some Error occured please try again later!";
        }
    }
    public function changePersonalProfiles($step) {
        $step = base64_decode($step);
        $this->backwardCalculator($step);
        return view('personalProfiles', ['parent' => 10]);
    }
    public function postLastPagePersonalProfiles(Request $request) {
        $redirect_status = $this->dynamicPost($request);
        if ($redirect_status) {
            return redirect()->route('summary');
        }
        else
        {
            echo "Some Error occured please try again later!";
        }
    }
    public function changeRateReview($step) {
        $step = base64_decode($step);
        $this->backwardCalculator($step);
        return view('rateReviews', ['parent' => 10]);
    }

    public function postLastPageRateReviews(Request $request) {
        $redirect_status = $this->dynamicPost($request);
        if ($redirect_status) {
            return redirect()->route('summary');
        }
        else
        {
            echo "Some Error occured please try again later!";
        }
    }
    public function changePayment($step) {
        $step = base64_decode($step);
        $this->backwardCalculator($step);
        return view('acceptPayment', ['parent' => 10]);
    }

    public function postLastPagePayment(Request $request) {
        $redirect_status = $this->dynamicPost($request);
        if ($redirect_status) {
            return redirect()->route('summary');
        }
        else
        {
            echo "Some Error occured please try again later!";
        }
    }
    public function changeSharing($step) {
        $step = base64_decode($step);
        $this->backwardCalculator($step);
        return view('sharingFunctions', ['parent' => 10]);
    }

    public function postLastPageSharing(Request $request) {
        $redirect_status = $this->dynamicPost($request);
        if ($redirect_status) {
            return redirect()->route('summary');
        }
        else
        {
            echo "Some Error occured please try again later!";
        }
    }
    public function changeConnectTo($step) {
        $step = base64_decode($step);
        $this->backwardCalculator($step);
        return view('connectToApp', ['parent' => 10]);
    }
    public function postLastPageConnectTo(Request $request) {
        $redirect_status = $this->dynamicPost($request);
        if ($redirect_status) {
            return redirect()->route('summary');
        }
        else
        {
            echo "Some Error occured please try again later!";
        }
    }
    public function changeCms($step) {
        $step = base64_decode($step);
        $this->backwardCalculator($step);
        return view('cms', ['parent' => 10]); 
    }
    public function postLastPageCms(Request $request) {
        $redirect_status = $this->dynamicPost($request);
        if ($redirect_status) {
            return redirect()->route('summary');
        }
        else
        {
            echo "Some Error occured please try again later!";
        }
    }
    public function changeSearch($step) {
        $step = base64_decode($step);
        $this->backwardCalculator($step);
        return view('search', ['parent' => 10]); 
    }
    public function postLastPageSearch(Request $request) {
        $redirect_status = $this->dynamicPost($request);
        if ($redirect_status) {
            return redirect()->route('summary');
        }
        else
        {
            echo "Some Error occured please try again later!";
        }
    }
    public function changeLook($step) {
        $step = base64_decode($step);
        $this->backwardCalculator($step);
        return view('mobileView', ['parent' => 10]); 
    }
    public function postLastPageMobileView(Request $request) {
        $redirect_status = $this->dynamicPost($request);
        if ($redirect_status) {
            return redirect()->route('summary');
        }
        else
        {
            echo "Some Error occured please try again later!";
        }
    }

    //for updating in summary page
    private function UpdateProcess($step, $identifier, $name) {
    	$search = Process::where('step', $step)->where('identifier', $identifier)->first();
    	if ($search) {
    		$search->name = $name ;
    		if ($search->save()) {
    			return true;
    		}
    		else
    		{
    			return false;
    		}
    	}
    	else
    	{
    		return false;
    	}
    }

    //for update cost in return view page
    private function backwardCalculator($step) {
		$tier5_cost_step10 = Session::get('tier5_cost_step10');
		$other_cost_step10 = Session::get('other_cost_step10');
        ${"tier5_cost_step" . $step} = Session::get('tier5_cost_step'.$step);
        ${"other_cost_step" . $step} = Session::get('other_cost_step'.$step);
        $tier5_cost_step10 = $tier5_cost_step10 - ${"tier5_cost_step" . $step};
        $other_cost_step10 = $other_cost_step10 - ${"other_cost_step" . $step};
        Session::put('tier5_cost_step10', $tier5_cost_step10);
        Session::put('other_cost_step10', $other_cost_step10);
    }

    //dynamically post each page item
    private function dynamicPost($request) {
        $name = $request->btn;
        $step = $request->step;
        $identifier = Session::get('identifier');
        $update_status = $this->UpdateProcess($step, $identifier, $name);
        if ($update_status) {
            $cost_details = Item::where('name', $name)->where('step', $step)->first();
            $tier5_cost_step10 = Session::get('tier5_cost_step10')+$cost_details->tier5_cost;
            $other_cost_step10 = Session::get('other_cost_step10')+$cost_details->other_cost;
            Session::put('tier5_cost_step10', $tier5_cost_step10);
            Session::put('other_cost_step10', $other_cost_step10);
            Session::put('tier5_cost_step'.$step, $cost_details->tier5_cost);
            Session::put('other_cost_step'.$step, $cost_details->other_cost);
            return true;
        }
        else
        {
            return false;
        }
    }
}
