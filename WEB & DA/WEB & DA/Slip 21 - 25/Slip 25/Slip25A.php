<?php
    $xml = new DOMDocument('1.0', 'UTF-8');
    $xml->formatOutput = true;

    if (file_exists('cricket.xml')) 
    {
        $xml->load('cricket.xml');
    } 
    else 
    {
        $cricketTeam = $xml->createElement('CricketTeam');
        $xml->appendChild($cricketTeam);
    }

    $teamAustralia = $xml->createElement('Team');
    $teamAustralia->setAttribute('country', 'Australia');

    $player1 = $xml->createElement('player', 'Steve Smith');
    $runs1 = $xml->createElement('runs', '100');
    $wicket1 = $xml->createElement('wicket', '0');

    $teamAustralia->appendChild($player1);
    $teamAustralia->appendChild($runs1);
    $teamAustralia->appendChild($wicket1);

    $cricketTeam->appendChild($teamAustralia);

    $teamIndia = $xml->createElement('Team');
    $teamIndia->setAttribute('country', 'India');

    $player2 = $xml->createElement('player', 'Virat Kohli');
    $runs2 = $xml->createElement('runs', '90');
    $wicket2 = $xml->createElement('wicket', '1');

    $teamIndia->appendChild($player2);
    $teamIndia->appendChild($runs2);
    $teamIndia->appendChild($wicket2);

    $cricketTeam->appendChild($teamIndia);

    $xml->save('cricket.xml');

    echo "XML file created/updated successfully: cricket.xml";
?>
