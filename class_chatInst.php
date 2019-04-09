<?php 
session_start(); 

class messagerie
{

	public function send_message()  
	{
		if(isset($_POST['envoyer'])&& isset($_POST) && !empty($_POST['email']) && !empty($_POST['message']))
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$requetsend = $pdo->prepare("INSERT INTO messagerie (email, message_envoyer, message_recu) VALUES (:email, :msgsend, ' ')");
			$requetsend->bindValue(':msgsend', $_POST['message']);
			$requetsend->bindValue(':email', $_SESSION['email']);
			$requetsend->execute(); 
		}
	}

	public function rec_msg()
	{
		if(isset($_POST['envoyer'])&& isset($_POST) && !empty($_POST['email']) && !empty($_POST['message']))
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$requetrecup = $pdo->prepare("INSERT INTO messagerie (email, message_envoyer, message_recu) VALUES (:email, '', :msgrecu)");
			$requetrecup->bindValue(':email', $_POST['email']);
			$requetrecup->bindValue(':msgrecu', $_POST['message']);
			$requetrecup->execute();
		}
	}

	public function display_msg()
	{	
		$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
		$rqt = $pdo->prepare("SELECT message_envoyer FROM messagerie WHERE email = :email");
		$rqt->bindValue(':email', $_SESSION['email']);
		$rqt->execute();
		$display = $rqt->fetchAll();
		return $display;
	}

	public function display_msgrec()
	{
		if(isset($_POST['email']))
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$rqt = $pdo->prepare("SELECT message_recu, email FROM messagerie WHERE email = :email");
			$rqt->bindValue(':email', $_POST['email']);
			$rqt->execute();
			$display = $rqt->fetchAll();
			return $display;
		}
	}
}
$mess = new messagerie();
$data = $mess->send_message();
$datarec = $mess->rec_msg();
$datadisplayrec = $mess->display_msgrec();
?>