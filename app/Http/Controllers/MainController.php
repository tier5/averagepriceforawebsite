<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Item;
use App\Process;

class MainController extends Controller {

	public function getMarketingPages() {
		$identifier = time();
		Session::put('identifier', $identifier);
		Session::put('tier5_cost_step0', 0);
		Session::put('other_cost_step0', 0);
		Session::put('step', 0);
		return view('marketing-pages');
	}

	public function postMarketingPages(Request $request) {
		//dd(Session::all());
		$name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($name, $step, $identifier);
		if ($save_status) {
		 	$add_status = $this->ForwardCalculator($step, $name);
			if ($add_status) {
				return redirect()->route('getPeopleLogin');
			}
			else
			{
				echo "Some Error occured. Try again Later";
			}
		}
		else
		{
			echo "Some Error occured please try again later";
		}

	}

	public function getPeopleLogin() {
		return view('peopleLogin');
	}

	public function postPeopleLogin(Request $request) {
		$name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($name, $step, $identifier);
		if ($save_status) {
		 	$add_status = $this->ForwardCalculator($step, $name);
			if ($add_status) {
				return redirect()->route('personalProfiles');
			}
			else
			{
				echo "Some Error occured. Try again Later";
			}
		}
		else
		{
			echo "Some Error occured please try again later";
		}
	}
	public function getPersonalProfiles() {
		return view('personalProfiles');
	}
	public function postPersonalProfiles(Request $request) {
		$name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($name, $step, $identifier);
		if ($save_status) {
		 	$add_status = $this->ForwardCalculator($step, $name);
			if ($add_status) {
				return redirect()->route('acceptPayment');
				//dd(Session::all());
			}
			else
			{
				echo "Some Error occured. Try again Later";
			}
		}
		else
		{
			echo "Some Error occured please try again later";
		}
	}
	public function getAcceptPayment() {
		return view('acceptPayment');
	}
	public function postAcceptPayment(Request $request) {
		$name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($name, $step, $identifier);
		if ($save_status) {
		 	$add_status = $this->ForwardCalculator($step, $name);
			if ($add_status) {
				return redirect()->route('rateReviews');
				//dd(Session::all());
			}
			else
			{
				echo "Some Error occured. Try again Later";
			}
		}
		else
		{
			echo "Some Error occured please try again later";
		}
	}
	public function getRateReviews() {
		return view('rateReviews');
	}
	public function postRateReviews(Request $request) {
		$name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($name, $step, $identifier);
		if ($save_status) {
		 	$add_status = $this->ForwardCalculator($step, $name);
			if ($add_status) {
				return redirect()->route('sharingFunctions');
				//dd(Session::all());
			}
			else
			{
				echo "Some Error occured. Try again Later";
			}
		}
		else
		{
			echo "Some Error occured please try again later";
		}
	}
	public function getSharingFunctions() {
		return view('sharingFunctions');
	}
	public function postSharingFunctions(Request $request) {
		$name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($name, $step, $identifier);
		if ($save_status) {
		 	$add_status = $this->ForwardCalculator($step, $name);
			if ($add_status) {
				return redirect()->route('connectTo');
				//dd(Session::all());
			}
			else
			{
				echo "Some Error occured. Try again Later";
			}
		}
		else
		{
			echo "Some Error occured please try again later";
		}
	}
	public function getConnectToApp() {
		return view('connectToApp');
	}
	public function postConnectToApp(Request $request) {
		$name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($name, $step, $identifier);
		if ($save_status) {
		 	$add_status = $this->ForwardCalculator($step, $name);
			if ($add_status) {
				return redirect()->route('cms');
				//dd(Session::all());
			}
			else
			{
				echo "Some Error occured. Try again Later";
			}
		}
		else
		{
			echo "Some Error occured please try again later";
		}
	}
	public function getCms() {
		return view('cms');
	}
	public function postCms(Request $request) {
		$name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($name, $step, $identifier);
		if ($save_status) {
		 	$add_status = $this->ForwardCalculator($step, $name);
			if ($add_status) {
				return redirect()->route('search');
				//dd(Session::all());
			}
			else
			{
				echo "Some Error occured. Try again Later";
			}
		}
		else
		{
			echo "Some Error occured please try again later";
		}
	}
	public function getSearch() {
		return view('search');
	}
	public function postSearch(Request $request) {
		$name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($name, $step, $identifier);
		if ($save_status) {
		 	$add_status = $this->ForwardCalculator($step, $name);
			if ($add_status) {
				return redirect()->route('mobileView');
				//dd(Session::all());
			}
			else
			{
				echo "Some Error occured. Try again Later";
			}
		}
		else
		{
			echo "Some Error occured please try again later";
		}
	}
	public function getMobileView() {
		return view('mobileView');
	}
	public function postMobileView(Request $request) {
		$name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($name, $step, $identifier);
		if ($save_status) {
		 	$add_status = $this->ForwardCalculator($step, $name);
			if ($add_status) {
				return redirect()->route('summary');
				//dd(Session::all());
			}
			else
			{
				echo "Some Error occured. Try again Later";
			}
		}
		else
		{
			echo "Some Error occured please try again later";
		}
	}

	public function getSummary() {
		$identifier = Session::get('identifier');
		$selection_details = Process::where('identifier', $identifier)->get();
		if ($selection_details) {
			return view('summary',['details' => $selection_details]);
		}
		else
		{
			echo "Error refresh and start a new session from begining";
		}
	}

	//function for step by step calculation
	private function ForwardCalculator($step, $name) {
		$details = Item::where('name' , $name)->where('step', $step)->first();
		$previous_step = $step-1;
		${"tier5_cost_step" . $step} = Session::get('tier5_cost_step'.$previous_step)+$details->tier5_cost;
		${'other_cost_step'.$step} = Session::get('other_cost_step'.$previous_step)+$details->other_cost;

		Session::put('tier5_cost_step'.$step, ${"tier5_cost_step" . $step});
		Session::put('other_cost_step'.$step, ${'other_cost_step'.$step});
		Session::put('step', $step);
		return true;
	}

	//function for storing process path in database

	private function saveProcess($name, $step, $identifier) {
		$search = Process::where('step', $step)->where('identifier', $identifier)->first();
		if ($search) 
		{
			$search->name = $name;
			$search->identifier = $identifier;
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
			$process = new Process();
			$process->name = $name;
			$process->step = $step;
			$process->identifier = $identifier;
			if ($process->save()) {
				return true;
			}
			else
			{
				return false;
			}
		}

	}
}