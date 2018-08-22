<?php 
// Création de la classe StrUtils qui va modifier une string donnée par un utilisateur 
class StrUtils {
	protected $_string;
	protected $_ugly;
	public function __construct($str){
		$this->_string=$str;
		$this->_ugly=$str;
	}
	public function bold($s=false){
		if ($s==false){
			return "<p><strong>".$this->_string."</strong></p>";
		}
		if(strpos($this->_ugly, "<strong>")){
			return;
		}else {
			$this->_ugly="<strong>".$this->_ugly."</strong>";
		}
	}
	public function italic($s=false){
		if($s==false){
			return "<p><i>".$this->_string."</i></p>";
		}
		if(strpos($this->_ugly, "<i>")){
			return;
		}else {
			$this->_ugly="<i>".$this->_ugly."</i>";
		}
	}
	public function underline($s=false){
		if($s==false){
			return "<p><u>".$this->_string."</u></p>";
		}
		if(strpos($this->_ugly,"<u>")){
			return;
		}else {
			$this->_ugly="<u>".$this->_ugly."</u>";
		}
	}
	public function capitalize($s=false){
		if($s==false){
			return "<p style='text-transform:capitalize;'>".$this->_string."</p>";
		}
		if(strpos($this->_ugly,"style")){
			return ;
		}else {
			$this->_ugly="<p style='text-transform:uppercase;'>".$this->_ugly."</p>";
		}
	}
	public function uglify(){
		$this->bold(true);
		$this->italic(true);
		$this->underline(true);
		return $this->_ugly;
	}
}
$phrase= new StrUtils("Hello test");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Uglify :</h1>
	<?php echo $phrase->uglify();?>
	<h1>Bold :</h1>
	<?php echo $phrase->bold(); ?>
	<h1>Italic :</h1>
	<?php echo $phrase->italic(); ?>
	<h1>Underline :</h1>
	<?php echo $phrase->underline(); ?>
	<h1>Capitalize :</h1>
	<?php echo $phrase->capitalize(); ?>
</body>
</html>