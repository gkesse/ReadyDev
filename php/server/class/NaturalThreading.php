<?php

// Natural Threading by Ali Ashraf
// facebook.com/Ali.8X
// aliashraf@ieee.org

NaturalThreading::init();
class NaturalThreading {
	private $threads = null;
	private static $accessKey;
	private static $UA;
	private static $sID;
	private static $isChild;
	private $outputHandler;
	private $fallbackURL;

	public $delayThreshold = 200000;

	// initialize NaturalThreading
	// check if this is a call to spawned threads
	public static function init() {
		self::$accessKey = "-/y'x2`WuS5@)E&";
		self::$UA = "NaturalThreading/1.0";
		self::$isChild = false;

		if($_SERVER['HTTP_USER_AGENT'] == self::$UA) {

			if(!isset($_SERVER["HTTP_X_NATURALTHREADING_KEY"]) || !isset($_SERVER["HTTP_X_NATURALTHREADING_PUBLIC"]) || !isset($_SERVER["HTTP_X_NATURALTHREADING_FUNC"]) || !isset($_SERVER["HTTP_X_NATURALTHREADING_ARGS"])) {
				exit;
			}

			$key = hash("sha1", $_SERVER["HTTP_X_NATURALTHREADING_PUBLIC"] . self::$accessKey);

			// security checks.
			if($key != $_SERVER["HTTP_X_NATURALTHREADING_KEY"]) {
				exit;
			}

			set_time_limit($_SERVER["HTTP_X_NATURALTHREADING_TIMELIMIT"]);

			$func = $_SERVER["HTTP_X_NATURALTHREADING_FUNC"];
			$args = $_SERVER["HTTP_X_NATURALTHREADING_ARGS"];
			eval('$args = ' . $args . ';');

			self::$sID = hash("sha1", $key . self::$accessKey);
			self::$sID = substr(self::$sID, 0, 16);

			self::$isChild = true;

			//call the function
			$ret = call_user_func($func, $args);

			@session_id(self::$sID);
			@session_start();
			$_SESSION["tinyReturns"][$_SERVER["HTTP_X_NATURALTHREADING_INDEX"]] = $ret;
			session_write_close();

			exit;
		}
	}

	public static function send($var) {
		if(self::$isChild == true) {
			session_id(self::$sID);
			session_start();
			array_push($_SESSION["tinyMsg"], $var);
			session_write_close();
		} else {
			//trigger_error("Script is in parent thread.", E_WARNING);
		}
	}

	public function __construct() {
		$this->threads = array();
		$this->fallbackURL = "";
		$this->outputHandler = null;

		// Turn off output buffering
		ini_set('output_buffering', 'off');
		// Turn off PHP output compression
		ini_set('zlib.output_compression', false);
	}

	// add a new function and its arguments to the pool
	public function add($func, $args = null) {
		array_push($this->threads, array(
			"func" => $func,
			"args" => $args,
		));
	}

	// generate secure keys to eliminate security intrusions
	private function generateKeys() {
		$public = hash("sha1", microtime(true));
		$key = hash("sha1", $public . self::$accessKey);
		$sID = hash("sha1", $key . self::$accessKey);
		$sID = substr($sID, 0,16);

		return array(
			"public" => $public,
			"key" => $key,
			"sID" => $sID,
		);
	}

	// get current page full URL
	private function getFullURL()
	{
	    $s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
	    $sp = strtolower($_SERVER["SERVER_PROTOCOL"]);
	    $protocol = substr($sp, 0, strpos($sp, "/")) . $s;
	    $port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
	    return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
	}

	// fallback url works when the script isnt really accessed through browser (console, unit-test, etc..)
	public function setFallbackURL($URL) {
		$this->fallbackURL = $URL;
	}

	// function to intercept output from the child threads
	public function setOutputHandler($func) {
		$this->outputHandler = $func;
	}

	// show all messages in the queue
	private function returnBuffer() {
		@session_id(self::$sID);
		@session_start();
		if(sizeof($_SESSION["tinyMsg"]) > $_SESSION["tinyMsgIdx"]) {
			for($i = $_SESSION["tinyMsgIdx"]; $i < sizeof($_SESSION["tinyMsg"]); $i++) {
				if($this->outputHandler == null) {

					while (@ob_end_flush());
					// Implicitly flush the buffer(s)
					ini_set('implicit_flush', true);
					ob_implicit_flush(true);

					echo $_SESSION["tinyMsg"][$i];

					// browser hacks
					echo str_pad("",1024," ");

					@ob_flush();
					@flush();

				} else {
					call_user_func($this->outputHandler, $_SESSION["tinyMsg"][$i]);
				}
			}
			$_SESSION["tinyMsgIdx"] = sizeof($_SESSION["tinyMsg"]);
		}
		session_write_close();
	}

	// Execute all the threads in paralell
	public function execute() {

		$curlHandle = curl_multi_init();
		$curls = array();

		$k = $this->generateKeys();

		$maxExec = ini_get('max_execution_time');
		
		$url = "";
		if($_SERVER['REQUEST_URI'] == "") {
			$url = $this->fallbackURL;
		} else {
			$url = $this->getFullURL();
		}
		if($url == "") {
			throw new Exception("fallbackURL not given.");
		}

		self::$sID = $k["sID"];

		session_id(self::$sID);
		session_start();
		$_SESSION["tinyMsg"] = array();
		$_SESSION["tinyMsgIdx"] = 0;
		$_SESSION["tinyReturns"] = array();
		session_write_close();

		$i = 0;
		foreach($this->threads as $v) {
			$cURL = curl_init();

			curl_setopt($cURL, CURLOPT_URL, $url);
			curl_setopt($cURL, CURLOPT_TIMEOUT, $maxExec);
			curl_setopt($cURL, CURLOPT_HEADER, 0);
			curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
			    'X-NaturalThreading-key: ' . $k["key"],
			    'X-NaturalThreading-public: ' . $k["public"],
			    'X-NaturalThreading-func: ' . (string) $v["func"],
			    'X-NaturalThreading-args: ' . var_export($v["args"], true),
			    'X-NaturalThreading-timeLimit: ' . $maxExec,
			    'X-NaturalThreading-index: ' . $i,
		    ));
			curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($cURL, CURLOPT_USERAGENT, self::$UA);
			curl_multi_add_handle($curlHandle, $cURL);

			array_push($curls, $cURL);
			$i++;
		}

		$flag=null;
		do {
		    curl_multi_exec($curlHandle, $flag);
		    $this->returnBuffer();
		    usleep($this->delayThreshold);
		} while ($flag > 0);

		$outputs = array();
		foreach($curls as $v) {
			array_push($outputs, curl_multi_getcontent ($v));
		}

		foreach($curls as $v) {
			curl_multi_remove_handle($curlHandle, $v);
		}

		curl_multi_close($curlHandle);

		$this->returnBuffer();

		$messages = $_SESSION["tinyMsg"];
		$returns = $_SESSION["tinyReturns"];

		unset($_SESSION);
		@session_destroy();

		return array(
			"outputs" => $outputs,
			"messages" => $messages,
			"returns" => $returns,
		);
	}
}

?>