<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immigration | LegalBridge</title>

    <link rel="stylesheet" href="stylesheets/default.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>
<body>
    <?php
    include("../src/navigation/navbar.php");
    ?>
    <div class="section header">
        <div class="no-zebra-striping">
            <h1 class="header">Immigration</h1>
            <div>
                <p>Legalbridge provides trusted immigration services to individuals, families, and businesses seeking to establish themselves in Canada. Whether you need assistance with visas, sponsorship, skilled worker programs, or legal appeals, we are committed to guiding you through every step of the process with expertise and care.</p>
            </div>
        </div>
        <div>
            <div>
                <h1>Immigration</h1>
                <div class="grid">
                    <a href="#permits">Permits</a>
                    <a href="#temporary-resident-visas">Temporary resident visas</a>
                    <a href="#sponsorship">Sponsorship</a>
                    <a href="#skilled-workers">Skilled workers</a>
                    <a href="#pilot-programs">Pilot programs</a>
                    <a href="#business-class">Business class</a>
                    <a href="#humanitarian-and-compassionate-considerations">Humanitarian and compassionate considerations</a>
                    <a href="#reconsideration-request-appeal-judicial-review">Reconsideration request/Appeal/Judicial review</a>
                </div>
            </div>
        </div>
    </div>

    <div class="transition"></div>

    <?php

    include("../src/methods/create-details.php");

    createDetails("Permits", "permits", ["work", "study", "visitor record", "temporary resident permit"], "Includes", "public");
    createDetails("Temporary Resident Visas", "temporary-resident-visas", ["visitor", "student", "work", "super visa"], "For/includes:", "domain");
    createDetails("Sponsorship", "sponsorship", ["Parents and grandparents", "spouses and common-law partners", "children"], "For:", "savings");
    createDetails("Skilled Workers", "skilled-workers", ["Express entry", "Provincial nominee programs (PNPs)", "Atlantic Immigration Program", "Quebec selected skilled (QSC) holders"], "For:", "work");
    createDetails("Pilot Programs", "pilot-programs", ["Rural and Francophone Community Immigration Pilots and Economic Mobility Pathways Pilot", "Home Care Worker Immigration Pilot", "Agri-Food Immigration Pilot"], "For:", "groups");
    createDetails("Business Class", "business-class", ["Self-employment", "Entrepreneur", "Investors"], "For/includes:", "business_center");
    ?>

    <div class="section-plain" id="humanitarian-and-compassionate-considerations">
        <h1><i class='material-symbols-outlined' icon-align>favorite</i></h1>
        <lb></lb>
        <h1>Humanitarian and Compassionate Considerations</h1>
        <lb></lb>
        <h2>Have Questions?</h2>
        <a href="contact-us.php" class="button">Contact Us</a>
    </div>

    <div class="section-plain" id="reconsideration-request-appeal-judicial-review">
        <lb></lb>
        <h1>Reconsideration request/Appeal/Judicial review</h1>
        <lb></lb>
        <h2>Have Questions?</h2>
        <a href="contact-us.php" class="button">Contact Us</a>
    </div>
</body>
</html>