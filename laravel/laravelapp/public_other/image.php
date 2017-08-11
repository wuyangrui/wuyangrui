<?php
	class html2png{
		private $filename;
		private $pngwidth;
		private $pngheight;
		private $url_data;
		private $url;
		public function __construct($url,$widthsize=1024,$heightsize=800,$file = 'index.html'){
			$this->url = $url;
			$this->filename = $file;
			$this->pngwidth = intval($widthsize);
			$this->pngheight = intval($heightsize);
			$this->url_data = glob($url.'*',GLOB_ONLYDIR);
		}
		function getData($forcibly = false){
			if(!empty($this->url_data)){
				$data = array();
				$weburl = 'http://'.$_SERVER['SERVER_NAME'].'/';
				foreach($this->url_data as $key => $dir_url){
					//得到文件夹名
					$dirname = substr($dir_url,strlen($this->url));
					//PNG文件地址
					$pngurl = $dir_url.DIRECTORY_SEPARATOR.$dirname.'.png';
					//HTML文件地址
					$fileurl = $dir_url.'/'.$this->filename;
					if(file_exists($fileurl)){
						if(!file_exists($pngurl) || $forcibly){
							system($this->getExec($weburl.$fileurl, $pngurl));
						}
						if(file_exists($pngurl)){
							$data[$dirname] = $this->url . $dirname.'.png';
						}
					}
				}
				return empty($data) ? false : $data;
			}else{
				return false;
			}
		}
		//判断操作系统平台，返回不同的CutyCapt语句
		function getExec($weburl,$saveurl){
			if(preg_match("/WIN/i",PHP_OS)){
			 	$execurl = dirname(__FILE__).DIRECTORY_SEPARATOR."CutyCapt".DIRECTORY_SEPARATOR."CutyCapt.exe";
			 	$execurl .= " --min-width=".$this->pngwidth." --min-height=".$this->pngheight." --url=".$weburl." --out=".$saveurl;
			}elseif(PHP_OS=='Linux'){
				$execurl = "xvfb-run --server-args=\"-screen 0, 1024x768x24\" cutycapt";
				$execurl .= " --min-width=".$this->pngwidth." --min-height=".$this->pngheight." --url=".$weburl." --out=".$saveurl;
			}
			return $execurl ;
		}
	}
	$aa = new html2png('templates/');
	$fdff = $aa->getData();
	print_r($fdff);
?>