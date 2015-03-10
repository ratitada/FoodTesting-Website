<?php
class Status{
	public $status;
}

class ProtocolController extends BaseController{
	public function checklogin(){
		$obj = new Status;
		if( Input::has('username') && Input::has('password') ){
			//return User::where('uname', '=', Input::get('username'))->where('passwordsee', '=', Input::get('password'))->first() ? "true":"false";
			if( $u = User::where('uname', '=', Input::get('username'))->where('passwordsee', '=', Input::get('password'))->first() ){
				
				$arr = array();

				$alltest = User::findAllTest($u);
				foreach($alltest as $test){
					$max = Testinuser::where('uid', '=', $u->uid)->where('tid', '=', $test->tid)->max('point');
					//return $max;
					$done = 0;
					if($max != 0){
						$done = 1;
					}
					$o = new stdClass;
					$o->tid = $test->tid;
					$o->work = $done;
					$o->attribute = $test->attribute_num;
					$o->create = date("j/n/Y",strtotime($test->created_at));

					array_push($arr, $o);

				}

				$ret = new stdClass;
				$ret->uid = $u->uid;
				$ret->test = $arr;

				return Response::json($ret, 200);
			}
			$obj->status = "no";
			return Response::json($obj, 400);
		}
		$obj->status = "Miss some parameter";
		return Response::json($obj, 400);
	}

	public function countatt(){
		$obj = new Status;
		if( Input::has('tid') ){
			$att = Attributeintest::where('tid', '=', Input::get('tid'))->join('attribute', 'attribute.aid', '=', 'attributeintest.aid')
				->select('attribute.aid as aid', 'attribute.aname as aname')->get();
			return Response::json($att, 200);
		}
		$obj->status = "Miss some parameter";
		return Response::json($obj, 400);
	}

	public function countch(){
		$obj = new Status;
		if( Input::has('tid') && Input::has('aid') && Input::has('uid') ){
			//return User::where('uname', '=', Input::get('username'))->where('passwordsee', '=', Input::get('password'))->first() ? "true":"false";
			$tu = Testinuser::where('tid', '=', Input::get('tid'))->where('uid', '=', Input::get('uid'))
				->where('aid', '=', Input::get('aid'))->join('child', 'child.cid', '=', 'testinuser.cid')
				->select('child.cid as cid', 'child.cname as cname', 'min_av as min', 'max_av as max', 'point')->get();
			return Response::json($tu, 200);
		}
		$obj->status = "Miss some parameter";
		return Response::json($obj, 400);
	}

	public function summary(){
		$obj = new Status;
		if( Input::has('array') ){
			$all = json_decode(stripslashes(Input::get('array')));
			foreach($all as $ea){
				$t = Testinuser::where('tid','=',$ea->tid)->where('uid','=',$ea->uid)->where('aid','=',$ea->aid)->where('cid','=',$ea->cid)->first();
				$t->point = $ea->point;
				$t->save();

				$u = Userintest::where('uid','=',$ea->uid)->where('tid','=',$ea->tid)->first();
				$u->updated_at = date('Y-m-d H:i:s');
				$u->save();
			}
			//return "";
			$obj->status = "ok";
			return Response::json($obj, 200);
		}
		$obj->status = "Miss some parameter";
		return Response::json($obj, 400);
	}
}