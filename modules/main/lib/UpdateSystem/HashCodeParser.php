<? namespace Bitrix\Main\UpdateSystem;$GLOBALS['____426624919']= array(base64_decode('Ym'.'Fz'.'ZTY0X2'.'RlY29kZ'.'Q=='),base64_decode(''.'d'.'W5zZXJp'.'Y'.'WxpemU='),base64_decode('b3BlbnN'.'zbF92'.'Z'.'XJpZnk'.'='),base64_decode('dW5zZ'.'XJpYWxpe'.'mU='));if(!function_exists(__NAMESPACE__.'\\___495612030')){function ___495612030($_1836232274){static $_248524827= false; if($_248524827 == false) $_248524827=array(''.'YWxsb3dlZF9jb'.'GFz'.'c2Vz','aW5mb'.'w'.'==','c2lnbmF0'.'d'.'X'.'Jl',''.'c'.'2'.'hhMjU2V2l0aFJTQUVuY3'.'J'.'5cHR'.'pb24=','aW5'.'mbw==','YWxsb3dl'.'ZF'.'9'.'jbGFzc2Vz',''.'R'.'X'.'Jyb3I'.'gdmVyaW'.'Z5I'.'G9w'.'Z'.'W5'.'zc2w'.'gW0hDUF'.'A'.'wMV'.'0=','LS0t'.'LS1CRU'.'dJ'.'Ti'.'BQVUJMSUM'.'gS0VZLS0'.'t'.'LS0KTUlJQklq'.'Q'.'U5C'.'Z2'.'txaGtpRzl3MEJBUUVGQU'.'F'.'PQ0FROEFNSUl'.'C'.'Q2dLQ0'.'FRR'.'UE2aGN4SXFpa'.'XRVW'.'lJNd1lp'.'dWtTVQ'.'poOXhhNWZFRFl'.'s'.'Y2N'.'iVzN2aj'.'hBd'.'m'.'EzNXZL'.'cVZO'.'NG'.'lCOXRxQ'.'1'.'g3alU4Nn'.'FBYTJ2'.'Mzd'.'t'.'Y'.'l'.'RG'.'NnB'.'jW'.'TZIR1BB'.'aFJG'.'Cm'.'JwbndY'.'T1k3WU'.'d4Qj'.'Fu'.'U0tad'.'kUrakFSYml'.'MTEJn'.'WjFjR'.'zZaM'.'GR1'.'dT'.'VpMVhocElSTD'.'FjT'.'jB'.'IaDVm'.'Z'.'Xpw'.'alhDNk8'.'KWXhZcTBuVG9IV'.'Gp5Um'.'IxeWN6'.'d3RtaV'.'J3'.'WXF1'.'ZF'.'hnL'.'3h'.'XeHBwcXdGMHRVbGQz'.'UUJyM2k2'.'O'.'EI4'.'a'.'nF'.'NbSt'.'Uam'.'R'.'lQQp1L2ZnMUowS'.'kd0'.'U'.'jQ'.'v'.'eks0R'.'zdZSk5'.'2a'.'G11'.'aH'.'JSR'.'2t5'.'QVFWMFRWdTVMR'.'XVn'.'U3hqQXBSbUlKUU5I'.'UU1LM'.'EV'.'oOTN3Ck'.'1ab0Zv'.'UHA5'.'U2dKN0dhRlU4a3pTK0VRY250WXhiM'.'U'.'5'.'IVUpVS'.'XZUZGl'.'1'.'Ul'.'V'.'lRk'.'tseVRkeElySDZ'.'DTC'.'8v'.'YXBNSDMKRndJ'.'REFRQUIK'.'LS0t'.'LS1FTkQgUFV'.'CTElDIEtFWS0tLS'.'0t');return base64_decode($_248524827[$_1836232274]);}}; use Bitrix\Main\Application; use Bitrix\Main\Security\Cipher; use Bitrix\Main\Security\SecurityException; class HashCodeParser{ private string $_1225281379; public function __construct(string $_1225281379){ $this->_1225281379= $_1225281379;}  public function parse(){ $_165666869= $GLOBALS['____426624919'][0]($this->_1225281379); $_165666869= $GLOBALS['____426624919'][1]($_165666869,[___495612030(0) => false]); if($GLOBALS['____426624919'][2]($_165666869[___495612030(1)], $_165666869[___495612030(2)], $this->__1516749088(), ___495612030(3)) == round(0+1)){ $_251144156= Application::getInstance()->getLicense()->getHashLicenseKey(); $_549460174= new Cipher(); $_1160391165= $_549460174->decrypt($_165666869[___495612030(4)], $_251144156); return $GLOBALS['____426624919'][3]($_1160391165,[___495612030(5) => false]);} throw new SecurityException(___495612030(6));} private function __1516749088(): string{ return ___495612030(7);}}?>