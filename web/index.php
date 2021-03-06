<!DOCTYPE html>
<html>
<head>
<title>S3 Upload</title>
<link rel="stylesheet" href="/resources/css/blueprint/typography.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="/resources/css/global/global.css" type="text/css" media="screen, projection" />
<style>
    #hdFormContainer {
         width: 640px;
         padding: 15px;
         background-color: #ffffff;
         border-width: 1px;
         border-style: solid;
         margin: auto;
         -webkit-box-shadow: 0 5px 10px rgba(0,0,0,0.5);
         -moz-box-shadow: 0 5px 10px rgba(0,0,0,0.5);
         box-shadow: 0 5px 10px rgba(0,0,0,0.5);
         -moz-border-radius: 7px;
         -webkit-border-radius: 7px;
         border-radius: 7px;
         height: auto;
    }

    legend {
         font-family: inherit;
         font-size: 18px;
         font-weight: bold;
         margin: 4px;
         padding: 12px;
    }

    fieldset {
         font-family: inherit;
         border-width: 1px;
         border-style: solid;
         margin: auto;
         -moz-border-radius: 5px;
         -webkit-border-radius: 5px;
         border-radius: 5px;
         font-size: 12px;
         width: auto;
         height: auto;
         padding: auto;
    }

    .hdFormTitle {
         width: 600px;
         padding: 10px;
         margin: 0px;
         font-size: 28px;
         margin-top:28px;
    }

    .lineitem {
        color:#000;
        text-decoration:none;
        font-weight:bold;
    }
    form table th {
        text-align:left;
    }
</style>
</head>
<body>
    <div id="hdFormContainer">
        
        <fieldset>
            <legend>Hot Docs Trailer and Broadcast Clip Upload</legend>
            <p>Use the form below to upload your trailer and broadcast clips. Please be patient, depending on upload speeds and the file size the process can take several minutes. For example a 50MB file at 512 Kbit/s will take nearly 15 minutes to upload.</p>
            <h4>Important:</h4>
            <p>Use the title of your film to name your trailer and clip files.</p>
            <p><strong style="text-transfrom:uppercase;">Do not leave spaces or punctuation characters (e.g. apostrophes, commas, colons etc.) in the file names.</strong><p>
            <p style="margin-left:250px;">
                e.g.<br>
                Man_on_Wire_trailer<br>
                Man_on_Wire_clip1<br>
                Man_on_Wire_clip2<br>
                Man_on_Wire_clip3<br>
            </p>
            
<div id="s3uploader"></div>

<script>
var _s3config = {
    licence: 'S3U-REMOTE-ee51d669a91ebed',
    width: 575,
    theme: 'default',
    folder: '2018'
};
var _s3url = "https://s3uploader.com/remote/embed.1.js";

(function(d,s,a){var b,fjs=d.getElementsByTagName(s)[0];
if(d.getElementById(a))return;b=d.createElement(s);
b.id=a;b.src=_s3url;fjs.parentNode.insertBefore(b,fjs)}
(document,'script','s3uploader-embed'));
</script>
            
        </fieldset>

    </div>

</body>
<script src="/resources/js/modernizr/modernizr.min.js"></script>
<script>
    if (Modernizr.file-api) {
      alert("Your browser will work with this upload form.");
    } else {
      alert("Your browser does not support FileAPI and will not work with this upload form.");
    }
</script>
</html>
