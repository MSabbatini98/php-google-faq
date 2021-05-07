<!-- PHP -->
<?php

$faqs = [

    [ 
        "question" => "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?",
        "answer" => "<p>The recent <span class='evidence'> ruling by the Court of Justice of the European Union </span> has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.</p>
        <br>
        <p>Since this ruling was published on 13 May 2014, we've been working round the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with public's right to know and distribute information.</p>
        <br>
        <p>If you have a removal request, please fill out this <span class='evidence'> webform </span> . You'll receive an automatic reply confirming that we have received your request. We will then assess your case—please note this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results—for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organization, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA. </p>
        <br>
        <p> We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe it's important to respect the Court's judgment and are working hard to devise a process that complies with the law. </p>
        <br>
        <p> When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.</p>",
    ],

    [ 
        "question" => "How does Google protect my privacy and keep my information secure?",
        "answer" => "<p>We know security and privacy are important to you – and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.</p>
        <br>
        <p>We’re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.</p>
        <br>
        <p>You can learn more about safety and security online, including how to protect yourself and your family online, at the  <span class='evidence'> Google Safety Center.</span>
        <br>
        <span class='evidence'> Learn more </span>about how we keep your personal information private and safe — and put you in control.</p>",
    ],

    [ 
        "question" => "Why is my account associated with a country?",
        "answer" => "<p>Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:
        <br>
        <ol>
            <li> The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:
                <ol>
                    <li> Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland
                    </li>
                    <li> Google LLC, based in the United States, for the rest of the world
                    </li>
                </ol>
            </li>
            <li>The version of the terms that govern our relationship, which can vary depending on local laws</li>
            <br>
        </ol>
        Keep in mind that Google services are essentially the same regardless of the affiliate that provides the services or your country association.</p>",
    ],

    [ 
        "question" => "How can I remove information about myself from Google's search results?",
        "answer" => "<p>Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should  <span class='evidence'> contact the webmaster </span> of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, please <span class='evidence'> click here</span>. Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also <span class='evidence'> visit our help page for more information </span>.",
    ],
]
?>



<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google FAQ</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- File css -->    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header_top">
            <a href="Google.com">
                <img src="google_logo.png" alt="Logo di google">
                <h1>Privacy & terms</h1>
            </a>
        </div>
        <nav>
            <ul>
                <li >
                    <a href="#"> Overview</a>
                </li>   
                <li>
                    <a href="#"> Privacy policy</a>
                </li>
                <li>
                    <a href="#">Terms of Services</a>
                </li>
                <li>
                    <a href="#"> Technologies</a>
                </li>
                <li class="active">
                    <a href="#"> FAQ</a>
                </li>
            </ul>

        </nav>
    </header>

    <main>
        <div class="content">
            <?php foreach($faqs as $faq) : ?>
                <div class="q_a">
                    <h2> <?php echo $faq['question'] ?> </h2>
                    <p> <?php echo $faq['answer'] ?> </p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    
</body>
</html>