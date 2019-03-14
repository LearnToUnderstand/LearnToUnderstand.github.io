<!DOCTYPE html>
<html lang = 'en-us'>
    <head>
        <meta charset='UTF-8'>
        <link type = "text/css" rel = "stylesheet" href = "mattlib.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Fun and quick ad-lib games.">
	    <meta name="keywords" content="madlibs, mad libs, adlib, ad lib, funny">
      	<meta name="author" content="Matthew">
        <title>Exam Stress</title>
    </head>
    <body>
        <span id='top'></span>
        <div id = 'wrapper'>
            <a href = 'index.html'>
                <span class='homeButton'>Home</span></a>
            <a href='#helpDiv'>
                <span class='homeButton'>Help</span></a>
            <a href='difficultPeople.html'>
                <span class='homeButton'>Start Again!</span></a>
            <div id = "formwrapper">
                <form id = "form">
                    <label>A verb, in past tense</label>
                    <input id = "w1" type = "text">
                    <label>An emotion or feeling</label>
                    <input type = "text" id = "w2">
                    <label>An adjective (a pleasant one)</label>
                    <input type = "text" id = "w3">
                    <label>A thing</label>
                    <input type = "text" id = "w4"> 
                    <label>A verb</label>
                    <input type = "text" id = "w5">
                    <label>A verb</label>
                    <input type = "text" id = "w6">
                    <label>An emotion or feeling</label>
                    <input type = "text" id = "w7"> 
                    <label>A thing</label>
                    <input type = "text" id = "w8">
                    <label>A verb</label>
                    <input type = "text" id = "w9">
                    <label>A verb</label>
                    <input type = "text" id = "w10">
                    <label>A thing</label>
                    <input type = "text" id = "w11"> 
                    <label>A thing</label>
                    <input type = "text" id = "w12">
                    <label>A thing, plural</label>
                    <input type = "text" id = "w13">
                    <label>Adjective (something bad)<label>
                    <input type = "text" id = "w14">
                    <label>A verb<label>
                    <input type = "text" id = "w15">
                    <label>Something you say to someone you're arguing with (1-5 words)<label>
                    <input type = "text" id = "w16">
                    <label>Verb, ending in "ing"<label>
                    <input type = "text" id = "w17">
                    <label>Verb, ending in "ing"<label>
                    <input type = "text" id = "w18">
                    <label>A verb<label>
                    <input type = "text" id = "w19">
                    <label>Adjective, ending in "ly"<label>
                    <input type = "text" id = "w20">
                    <label>A verb<label>
                    <input type = "text" id = "w21">
                </form>
                <button type = "button" onclick = "storytime()"> 
                    LET'S TURN THESE WORDS INTO A STORY!
                </button>
            </div>  <!--  end formwrapper div -->
            <script>
                function storytime() {
                    document.getElementById('formwrapper').style.display = 
                    'none';
                    document.getElementById('helpDiv').style.display = 
                    'none';
                    document.getElementById('story').style.display = 'block';
                    document.getElementById('s1').innerHTML = 
                        document.getElementById('w1').value;
                    document.getElementById('s2').innerHTML =
                        document.getElementById('w2').value;
                    document.getElementById('s3').innerHTML =
                        document.getElementById('w3').value;
                    document.getElementById('s4').innerHTML =
                        document.getElementById('w4').value;
                    document.getElementById('s5').innerHTML =
                        document.getElementById('w5').value;
                    document.getElementById('s6').innerHTML =
                        document.getElementById('w6').value;
                    document.getElementById('s7').innerHTML =
                        document.getElementById('w7').value;
                    document.getElementById('s8').innerHTML =
                        document.getElementById('w8').value;
                    document.getElementById('s9').innerHTML =
                        document.getElementById('w9').value;
                    document.getElementById('s10').innerHTML =
                        document.getElementById('w10').value;
                    document.getElementById('s11').innerHTML =
                        document.getElementById('w11').value;
                    document.getElementById('s12').innerHTML =
                        document.getElementById('w12').value;
                    document.getElementById('s13').innerHTML =
                        document.getElementById('w13').value;
                    document.getElementById('s14').innerHTML =
                        document.getElementById('w14').value;
                    document.getElementById('s15').innerHTML =
                        document.getElementById('w15').value;
                    document.getElementById('s16').innerHTML =
                        document.getElementById('w16').value;
                    document.getElementById('s17').innerHTML =
                        document.getElementById('w17').value;
                    document.getElementById('s18').innerHTML =
                        document.getElementById('w18').value;
                    document.getElementById('s19').innerHTML =
                        document.getElementById('w19').value;
                    document.getElementById('s20').innerHTML =
                        document.getElementById('w20').value;
                    document.getElementById('s21').innerHTML =
                        document.getElementById('w21').value;
                }
            </script>


            <div id='story'>
                <?php require 'story.php' ?>
            </div>  <!--end story div-->
    </div> <!--end wrapper div-->
</body>

</html>
