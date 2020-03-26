<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161442455-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-161442455-1');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- API Key below is only enabled for *.findthemasks.com/* Message @susanashlock for more info. -->
    <script defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSz0lnzPJIFeWM7SpSARHmV-snwrAXd2s&libraries=geometry">
    </script>
    <script src="locations-static.js"></script>
    <title>#Findthemasks</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <meta name="description" content="Help #findthemasks for covid-19" />
    <meta name="keywords" content="#findthemasks, masks, n95, coronavirus, covid-19" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      /* Styling for the JS generated locations list */

      @media (min-width: 768px) {
        .twitter-container {
          height: 35rem;
        }
      }

      .hidden {
        display: none;
      }

      .locations-list {
          padding-bottom: 10px;
          border-bottom: 1px solid #efefef;
      }

      .state h2 {
          font-size: 28px;
          padding-top: 20px;
          padding-bottom: 20px;
          margin: 0px;
          font-weight: 400;
          border-top: 1px solid #efefef;
      }

      .city h3 {
          font-size: 20px;
          padding-bottom: 20px;
          margin: 0px;
          text-transform: uppercase;
      }

      .city {
          line-height: 1.2;
          padding-bottom: 10px;
      }

      .city h4 {
          font-size: 18px;
          font-weight: 600;
          padding-bottom: 5px;
          margin: 0px;
      }

      .city p {
          margin: 0px;
          font-size: 18px;
      }

      .location {
          padding-bottom: 20px;
          overflow-wrap: break-word;
      }

      .location label {
          color: #999;
          font-size: 11px;
          font-weight: 600;
          text-transform: uppercase;
          margin-top: 12px;
          margin-bottom: 3px;
      }

      .donation-sites h1 {
          margin-bottom: -10px;
      }

      .filters-list {
          margin-bottom: 30px;
      }

      .filters-list div {
          display: inline-block;
      }

      .filters-list h4 {
          font-size: 20px;
          text-transform: uppercase;
          margin-top: 30px;
          margin-bottom: 10px;
      }

      .filters-list input {
          display: none;
      }

      .filters-list label {
          border: 1px #aadaff solid;
          background: #aadaff30;
          font-size: 18px;
          padding: 0.3rem 0.4rem;
          cursor: pointer;
          border-radius: 3px;
      }

      .filters-list label:hover {
          background-color: #aadaff59;
      }

      .filters-list label.selected {
          background-color: #aadaff;
      }

      #map {
          height: 400px; /* The height is 400 pixels */
          width: 100%; /* The width is the width of the web page */
      }

      #map .label {
          width: 105px;
          padding-top: 6px;
          padding-bottom: 2px;
          text-transform: uppercase;
          color: #999;
          font-size: 11px;
          font-weight: 400;
      }

      #map .value {
          font-weight: 400
      }
    </style>
</head>

<body>

<main class="content">

    <div class="container" style="padding-bottom: 40px;">
        <h1 style="padding: 20px 0px 10px 0px;">#findthemasks</h1>
        <p>Jump to: <a href="#sites">donate/add a site</a></p>
        <h5 style="padding-bottom: 20px;">America&rsquo;s frontline healthcare workers are treating COVID19 patients without adequate protective gear, risking their lives! They have taken to Twitter on <a href="https://twitter.com/search?q=%23GetMePPE&src=typeahead_click">#GetMePPE</a> to ask for help:</h5>


        <div class="container twitter-container">
            <div class="row">
                <div class="col-md-4">
                    <blockquote class="twitter-tweet" style="width: 100%"><p lang="en" dir="ltr">NYC. Mother of two, double frontline MD couple. Don’t make us orphan our two toddlers. Running out of masks, eye protection and gloves at work. <a href="https://twitter.com/VP?ref_src=twsrc%5Etfw">@VP</a> <a href="https://twitter.com/NYGovCuomo?ref_src=twsrc%5Etfw">@NYGovCuomo</a> <a href="https://twitter.com/hashtag/GetMePPE?src=hash&amp;ref_src=twsrc%5Etfw">#GetMePPE</a> <a href="https://twitter.com/choo_ek?ref_src=twsrc%5Etfw">@choo_ek</a> <a href="https://t.co/siI9TegNOL">pic.twitter.com/siI9TegNOL</a></p>&mdash; Cornelia Griggs (@CorneliaLG) <a href="https://twitter.com/CorneliaLG/status/1240069357067210760?ref_src=twsrc%5Etfw">March 18, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-md-4">
                    <blockquote class="twitter-tweet" style="width: 100%"><p lang="en" dir="ltr">This is what it looks like in the ICU. Rows of brown bags each labeled with the name of a nurse or doctor . We are told to keep and reuse these masks , which under normal conditions would be thrown out each time we leave the isolation room. <a href="https://twitter.com/hashtag/GetMePPE?src=hash&amp;ref_src=twsrc%5Etfw">#GetMePPE</a> <a href="https://t.co/8blP8LzAGv">pic.twitter.com/8blP8LzAGv</a></p>&mdash; Victoria Williams (@V_Q_W) <a href="https://twitter.com/V_Q_W/status/1240675890276831234?ref_src=twsrc%5Etfw">March 19, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-md-4">
                    <blockquote class="twitter-tweet" style="width: 100%"><p lang="en" dir="ltr">I work Urgent Care, seeing patients with flu-like symptoms all day long. We have been told that a surgical mask is all we &quot;need&quot; to protect us from <a href="https://twitter.com/hashtag/COVID19?src=hash&amp;ref_src=twsrc%5Etfw">#COVID19</a>. <a href="https://twitter.com/hashtag/GetMePPE?src=hash&amp;ref_src=twsrc%5Etfw">#GetMePPE</a> <a href="https://t.co/trIu40JSpA">pic.twitter.com/trIu40JSpA</a></p>&mdash; Jess HT MD (@JessHTMD) <a href="https://twitter.com/JessHTMD/status/1240039466372227072?ref_src=twsrc%5Etfw">March 17, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>

        <p style="padding-top: 30px; font-weight: 700">We need to help the helpers, right now.</p>

        <h3 style="padding-bottom: 30px">We need to find the masks.</h3>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Look in your basement, your emergency kit, your bug out bag, your workbench for <span class="embold">N95 masks</span>. They look like this:</p>
                    <img src="images/n95.jpg" style="width: 100%; padding-bottom: 20px;" alt="Three particulate respirator masks. The first is white with a filter cartridge on the front labelled &ldquo;3M NIOSH N100&rdquo;, the second is white with large black letters that say N95, the third is turquoise" class="visual pic gridCenter"/>
                </div>
                <div class="col-md-6">
                    <p>If you find <span class="embold">surgical masks</span>, those are also in short supply, and in many places are being used in place of N95s. They look like this:</p>
                    <img src="images/surgical.jpg" style="width: 100%; padding-bottom: 20px;" alt="A blue surgical mask, it has multiple layers of material and ear loops" width="700" class="visual pic gridCenter"/>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>All of these masks can save lives now if you get them into the hands of healthcare workers.</p>
                    <p>Disposable <span class=embold>booties</span>, <span class=embold>safety goggles</span>, and <span class=embold>disposable suits</span> are also in short supply. If you have these things or know someone who might (HVAC installers? Construction workers?) please share this site with them!</p>
                </div>
            </div>
        </div>
        <a name="sites"></a>
        <h2 style="padding: 20px 0px;">How to donate</h2>
        <ol>
            <li> Look at our list of sites below. You can filter by state or supplies needed.
            <li> If there's a site near you, drop off following their instructions.
            <li> If you are donating open packages, please put them in a ziploc bag with a note saying whether they have been used, whether anyone in your household has been sick or travelled outside the country, and the expiration date if known.
            <li> If there's not a site near you, visit our friends at <a href="https://ppelink.org/ppe-donations/">ppelink.org</a> to let them know what you have available.
        </ol>
        <h4>To add a donation site, update information, or request we take down information, please <a href="https://docs.google.com/forms/d/e/1FAIpQLSfgCpK5coPVFC6rJrE7ZhimiZuDoEaL6fo6gYqxsN_FIpJZhg/viewform">fill in this form</a>.</h4>

        <div class="map-container hidden">
          <h2 style="padding: 20px 0px;">Map of donation sites</h2>
          <div id="map"></div>
        </div>

        <div class="filters-container hidden">
          <h2 style="padding: 30px 0px 20px 0px;">List of donation sites</h2>
          <h4>Filters</h4>
          <form name="filters" class="filters-list"></form>
        </div>
        <div class="locations-container hidden">
          <div id="locations-list" class="locations-list">
<?php include 'data_fragment.html';?>
          </div>
        </div>
        <p style="padding-top: 30px;">To add a donation site, update information, or request we take down information, please <a href="https://docs.google.com/forms/d/e/1FAIpQLSfgCpK5coPVFC6rJrE7ZhimiZuDoEaL6fo6gYqxsN_FIpJZhg/viewform">fill in this form</a>.<br><br>
        Got a comment or suggestion not related to data updates? Want to help? contact@findthemasks.com or join us on <a href="https://github.com/r-pop/findthemasks">our Github</a>.</p>
        <p class="centerText">made with &lt;3 in Seattle</p>
        <a href="whoweare.html" class="end">who we are</a>
    </div>
</main>
</body>
</html>

