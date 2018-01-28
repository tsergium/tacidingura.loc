<?php

class HomeController extends \BaseController {
	protected $layout = 'layouts.tacidingura';

	public function index()
	{
        $pageName = 'Recent Products';
        $results = Products::orderBy('added', 'desc')->remember(10)->paginate(5);
        View::share('seo_title', $pageName);

        return View::make('home.index', array('products' => $results, 'pageName' => $pageName));
	}

    public function contact()
    {
        $pageName = 'Contact';

        View::share('seo_title', $pageName);
        return View::make('home.contact', [ 'pageName' => $pageName]);
    }

    public function sendContact()
    {
        if (isset($_POST["submit"])) {
            $email_to = 'tsergium@gmail.com';
            $subject = 'Mesaj contact Taci Din Gura';
            $from = stripslashes($_POST['name'])."<".stripslashes($_POST['email']).">";


            // now we'll build the message headers
            $headers = "From: $from\r\n" ;

            // Check if name has been entered

            if (!$_POST['name']) {
                $errName = 'Indrodu numele!';
            }
            if (!$_POST['phone']) {
                $errPhone = 'Indrodu Nr. telefon!';
            }
            // Check if email has been entered and is valid
            if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errEmail = 'Introdu o adresa de email valida!';
            }
            //Check if message has been entered
            if (!$_POST['mesaj']) {
                $errMesaj = 'Introdu mesajul!';
            }


            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $mesaj = $_POST['mesaj'];

            $message = "Mesaj contact Taci Din Gura\n\n"; // Email Heading
            function clean_string($string) {
                $bad = array("content-type","bcc:","to:","cc:","href");
                return str_replace($bad,"",$string);
            }


            $message .= "Nume si prenume: ".clean_string($name)."\n";
            $message .= "Numarul de telefon: ".clean_string($phone)."\n";
            $message .= "Adresa de email: ".clean_string($email)."\n";
            $message .= "Mesaj: ".clean_string($mesaj)."\n";

            // If there are no errors, send the email
            if (!$errName && !$errPhone && !$errEmail && !$errMesaj) {
                if (mail ($email_to, $subject, $message, $headers)) {
                    $result='<div class="alert alert-success">Multumesc pentru mesaj! Te voi contacta cat mai curind.</div>';
                } else {
                    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
                }
            }
        }

        return redirect('contact');
    }

    public function faq()
    {
        $pageName = 'F.A.Q.';
        View::share('seo_title', $pageName);
        return View::make('home.faq', [ 'pageName' => $pageName]);
    }

    public function about()
    {
        $pageName = 'Despre noi';
        View::share('seo_title', $pageName);
        return View::make('home.despre_noi', [ 'pageName' => $pageName]);
    }

    public function terms()
    {
        $pageName = 'Termeni si Conditii';
        View::share('seo_title', $pageName);
        return View::make('home.termeni_si_conditi', [ 'pageName' => $pageName]);
    }
}