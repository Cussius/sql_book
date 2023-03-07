<?php
require 'config.php';
if(!empty($_SESSION['id'])){
    $id = $_SESSION['id'];
    $result = mysqli_query($conn, "SELECT * FROM user_info WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
}
else{
    header('Location: login.php');
}

?>


<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta name="generator" content="Docutils 0.17.1: http://docutils.sourceforge.net/" />

    <title>Exercises &#8212; Teacher as classroom manager (UNISA Edition)</title>
    
  <!-- Loaded before other Sphinx assets -->
  <link href="_static/styles/theme.css?digest=1999514e3f237ded88cf" rel="stylesheet">
<link href="_static/styles/pydata-sphinx-theme.css?digest=1999514e3f237ded88cf" rel="stylesheet">

    
  <link rel="stylesheet"
    href="_static/vendor/fontawesome/5.13.0/css/all.min.css">
  <link rel="preload" as="font" type="font/woff2" crossorigin
    href="_static/vendor/fontawesome/5.13.0/webfonts/fa-solid-900.woff2">
  <link rel="preload" as="font" type="font/woff2" crossorigin
    href="_static/vendor/fontawesome/5.13.0/webfonts/fa-brands-400.woff2">

    <link rel="stylesheet" type="text/css" href="_static/pygments.css" />
    <link rel="stylesheet" href="_static/styles/sphinx-book-theme.css?digest=5115cc725059bd94278eecd172e13a965bf8f5a9" type="text/css" />
    <link rel="stylesheet" type="text/css" href="_static/togglebutton.css" />
    <link rel="stylesheet" type="text/css" href="_static/copybutton.css" />
    <link rel="stylesheet" type="text/css" href="_static/mystnb.css" />
    <link rel="stylesheet" type="text/css" href="_static/sphinx-thebe.css" />
    <link rel="stylesheet" type="text/css" href="_static/design-style.b7bb847fb20b106c3d81b95245e65545.min.css" />
    
  <!-- Pre-loaded scripts that we'll load fully later -->
  <link rel="preload" as="script" href="_static/scripts/pydata-sphinx-theme.js?digest=1999514e3f237ded88cf">

    <script data-url_root="./" id="documentation_options" src="_static/documentation_options.js"></script>
    <script src="_static/jquery.js"></script>
    <script src="_static/underscore.js"></script>
    <script src="_static/doctools.js"></script>
    <script src="_static/clipboard.min.js"></script>
    <script src="_static/copybutton.js"></script>
    <script src="_static/scripts/sphinx-book-theme.js?digest=9c920249402e914e316237a7dbc6769907cce411"></script>
    <script>let toggleHintShow = 'Click to show';</script>
    <script>let toggleHintHide = 'Click to hide';</script>
    <script>let toggleOpenOnPrint = 'true';</script>
    <script src="_static/togglebutton.js"></script>
    <script>var togglebuttonSelector = '.toggle, .admonition.dropdown, .tag_hide_input div.cell_input, .tag_hide-input div.cell_input, .tag_hide_output div.cell_output, .tag_hide-output div.cell_output, .tag_hide_cell.cell, .tag_hide-cell.cell';</script>
    <script src="_static/design-tabs.js"></script>
    <script>const THEBE_JS_URL = "https://unpkg.com/thebe@0.8.2/lib/index.js"
const thebe_selector = ".thebe,.cell"
const thebe_selector_input = "pre"
const thebe_selector_output = ".output, .cell_output"
</script>
    <script async="async" src="_static/sphinx-thebe.js"></script>
    <link rel="index" title="Index" href="genindex.php" />
    <link rel="search" title="Search" href="search.php" />
    <link rel="prev" title="PART A: EFFECTIVE CLASSROOM MANAGEMENT" href="classroom-manager.php" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="docsearch:language" content="None">
    

    <!-- Google Analytics -->
    
  </head>
  <body data-spy="scroll" data-target="#bd-toc-nav" data-offset="60">
<!-- Checkboxes to toggle the left sidebar -->
<input type="checkbox" class="sidebar-toggle" name="__navigation" id="__navigation" aria-label="Toggle navigation sidebar">
<label class="overlay overlay-navbar" for="__navigation">
    <div class="visually-hidden">Toggle navigation sidebar</div>
</label>
<!-- Checkboxes to toggle the in-page toc -->
<input type="checkbox" class="sidebar-toggle" name="__page-toc" id="__page-toc" aria-label="Toggle in-page Table of Contents">
<label class="overlay overlay-pagetoc" for="__page-toc">
    <div class="visually-hidden">Toggle in-page Table of Contents</div>
</label>
<!-- Headers at the top -->
<div class="announcement header-item noprint">My announcement!</div>
<div class="header header-item noprint"></div>

    
    <div class="container-fluid" id="banner"></div>

    

    <div class="container-xl">
      <div class="row">
          
<!-- Sidebar -->
<div class="bd-sidebar noprint" id="site-navigation">
    <div class="bd-sidebar__content">
        <div class="bd-sidebar__top"><div class="navbar-brand-box">
    <a class="navbar-brand text-wrap" href="index.php">
      
        <!-- `logo` is deprecated in Sphinx 4.0, so remove this when we stop supporting 3 -->
        
      
      
      <img src="_static/logo.jpg" class="logo" alt="logo">
      
      
      <h1 class="site-logo" id="site-title">Teacher as classroom manager (UNISA Edition)</h1>
      
    </a>
</div><form class="bd-search d-flex align-items-center" action="search.php" method="get">
  <i class="icon fas fa-search"></i>
  <input type="search" class="form-control" name="q" id="search-input" placeholder="Search this book..." aria-label="Search this book..." autocomplete="off" >
</form><nav class="bd-links" id="bd-docs-nav" aria-label="Main">
    <div class="bd-toc-item active">
        
        <ul class="nav bd-sidenav bd-sidenav__home-link">
            <li class="toctree-l1">
                <a class="reference internal" href="intro.php">
                    Cover
                </a>
            </li>
        </ul>
        <ul class="current nav bd-sidenav">
 <li class="toctree-l1">
  <a class="reference internal" href="imprint-page.php">
   Imprint page
  </a>
 </li>
 <li class="toctree-l1 current active has-children">
  <a class="reference internal" href="classroom-manager.php">
   PART A: EFFECTIVE CLASSROOM MANAGEMENT
  </a>
  <input checked="" class="toctree-checkbox" id="toctree-checkbox-1" name="toctree-checkbox-1" type="checkbox"/>
  <label for="toctree-checkbox-1">
   <i class="fas fa-chevron-down">
   </i>
  </label>
  <ul class="current">
   <li class="toctree-l2 current active">
    <a class="current reference internal" href="#">
     Exercises
    </a>
   </li>
  </ul>
 </li>
</ul>

<ul class="nav bd-sidenav bd-sidenav__home-link">
  <li class="toctree-l1">
      <a class="reference internal" href="logout.php">
          Logout
      </a>
  </li>
</ul>

    </div>
</nav></div>
        <div class="bd-sidebar__bottom">
             <!-- To handle the deprecated key -->
            
            <div class="navbar_extra_footer">
            Powered by <a href="https://jupyterbook.org">Jupyter Book</a>
            </div>
            
        </div>
    </div>
    <div id="rtd-footer-container"></div>
</div>


          


          
<!-- A tiny helper pixel to detect if we've scrolled -->
<div class="sbt-scroll-pixel-helper"></div>
<!-- Main content -->
<div class="col py-0 content-container">
    
    <div class="header-article row sticky-top noprint">
        



<div class="col py-1 d-flex header-article-main">
    <div class="header-article__left">
        
        <label for="__navigation"
  class="headerbtn"
  data-toggle="tooltip"
data-placement="right"
title="Toggle navigation"
>
  

<span class="headerbtn__icon-container">
  <i class="fas fa-bars"></i>
  </span>

</label>

        
    </div>
    <div class="header-article__right">
<div class="menu-dropdown menu-dropdown-launch-buttons">
  <button class="headerbtn menu-dropdown__trigger"
      aria-label="Launch interactive content">
      <i class="fas fa-rocket"></i>
  </button>
  <div class="menu-dropdown__content">
    <ul>
      <li>
        <a href="https://mybinder.org/v2/gh/executablebooks/jupyter-book/master?urlpath=tree/exercises.ipynb"
   class="headerbtn"
   data-toggle="tooltip"
data-placement="left"
title="Launch on Binder"
>
  

<span class="headerbtn__icon-container">
  
    <img src="_static/images/logo_binder.svg">
  </span>
<span class="headerbtn__text-container">Binder</span>
</a>

      </li>
      
    </ul>
  </div>
</div>

<button onclick="toggleFullScreen()"
  class="headerbtn"
  data-toggle="tooltip"
data-placement="bottom"
title="Fullscreen mode"
>
  

<span class="headerbtn__icon-container">
  <i class="fas fa-expand"></i>
  </span>

</button>

<div class="menu-dropdown menu-dropdown-download-buttons">
  <button class="headerbtn menu-dropdown__trigger"
      aria-label="Download this page">
      <i class="fas fa-download"></i>
  </button>
  <div class="menu-dropdown__content">
    <ul>
      <li>
        <a href="_sources/exercises.ipynb"
   class="headerbtn"
   data-toggle="tooltip"
data-placement="left"
title="Download source file"
>
  

<span class="headerbtn__icon-container">
  <i class="fas fa-file"></i>
  </span>
<span class="headerbtn__text-container">.ipynb</span>
</a>

      </li>
      
      <li>
        
<button onclick="printPdf(this)"
  class="headerbtn"
  data-toggle="tooltip"
data-placement="left"
title="Print to PDF"
>
  

<span class="headerbtn__icon-container">
  <i class="fas fa-file-pdf"></i>
  </span>
<span class="headerbtn__text-container">.pdf</span>
</button>

      </li>
      
    </ul>
  </div>
</div>
<label for="__page-toc"
  class="headerbtn headerbtn-page-toc"
  
>
  

<span class="headerbtn__icon-container">
  <i class="fas fa-list"></i>
  </span>

</label>

    </div>
</div>

<!-- Table of contents -->
<div class="col-md-3 bd-toc show noprint">
    <div class="tocsection onthispage pt-5 pb-3">
        <i class="fas fa-list"></i> Contents
    </div>
    <nav id="bd-toc-nav" aria-label="Page">
        <ul class="visible nav section-nav flex-column">
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#question-1">
   Question 1
  </a>
 </li>
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#question-2">
   Question 2
  </a>
 </li>
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#question-3">
   Question 3
  </a>
 </li>
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#question-4">
   Question 4
  </a>
 </li>
</ul>

    </nav>
</div>
    </div>
    <div class="article row">
        <div class="col pl-md-3 pl-lg-5 content-container">
            <!-- Table of contents that is only displayed when printing the page -->
            <div id="jb-print-docs-body" class="onlyprint">
                <h1>Exercises</h1>
                <!-- Table of contents -->
                <div id="print-main-content">
                    <div id="jb-print-toc">
                        
                        <div>
                            <h2> Contents </h2>
                        </div>
                        <nav aria-label="Page">
                            <ul class="visible nav section-nav flex-column">
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#question-1">
   Question 1
  </a>
 </li>
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#question-2">
   Question 2
  </a>
 </li>
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#question-3">
   Question 3
  </a>
 </li>
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#question-4">
   Question 4
  </a>
 </li>
</ul>

                        </nav>
                    </div>
                </div>
            </div>
            <main id="main-content" role="main">
                
              <div>
                
  <section class="tex2jax_ignore mathjax_ignore" id="exercises">
<h1>Exercises<a class="headerlink" href="#exercises" title="Permalink to this headline">#</a></h1>
<section id="question-1">
<h2>Question 1<a class="headerlink" href="#question-1" title="Permalink to this headline">#</a></h2>
<div class="cell tag_remove-input docutils container">
</div>
<div class="cell tag_remove-input docutils container">
<div class="cell_output docutils container">
<div class="output text_html"><div id="uzBOxBBociUH" data-shufflequestions="False"
               data-shuffleanswers="True"
               data-preserveresponses="false"
               data-numquestions="1000000"> <style>:root {
    --medium-slate-blue: #6f78ffff;
    --orange-pantone: #f75c03ff;
    --russian-violet: #392061ff;
    --maximum-yellow-red: #ffc857ff;
    --viridian-green: #119da4ff;
    --incorrect-red: #c80202;
    --correct-green: #009113;
}

.Quiz {
    max-width: 600px;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 15px;
    padding-bottom: 4px;
    padding-top: 4px;
    line-height: 1.1;
    font-size: 16pt;
}

.QuizCode {
    font-size: 14pt;
    margin-top: 10px;
    margin-left: 20px;
    margin-right: 20px;
}

.QuizCode>pre {
    padding: 4px;
}

.Answer {
    margin: 10px 0;
    display: grid;
    grid-template-columns: auto auto;
    grid-gap: 10px;
}

.Feedback {
    font-size: 16pt;
    text-align: center;
    min-height: 2em;
}

.Input {
    align: left;
    font-size: 20pt;
}

.Input-text {
    display: block;
    margin: 10px;
    color: inherit;
    width: 140px;
    background-color: #c0c0c0;
    color: #fff;
    padding: 5px;
    padding-left: 10px;
    font-family: inherit;
    font-size: 20px;
    font-weight: inherit;
    line-height: 20pt;
    border: none;
    border-radius: 0.2rem;
    transition: box-shadow 0.1s);
}

.Input-text:focus {
    outline: none;
    background-color: #c0c0c0;
    box-shadow: 0.6rem 0.8rem 1.4rem -0.5rem #999999;
}

.MCButton {
    background: #fafafa;
    border: 1px solid #eee;
    border-radius: 10px;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
}

.MCButton p {
    color: inherit;
}

.MultipleChoiceQn {
    padding: 10px;
    background: var(--medium-slate-blue);
    color: #fafafa;
    border-radius: 10px;
}

.ManyChoiceQn {
    padding: 10px;
    background: var(--orange-pantone);
    color: #fafafa;
    border-radius: 10px;
}

.NumericQn {
    padding: 10px;
    background: var(--russian-violet);
    color: #fafafa;
    border-radius: 10px;
}

.NumericQn p {
    color: inherit;
}

.InpLabel {
    line-height: 34px;
    float: left;
    margin-right: 10px;
    color: #101010;
    font-size: 15pt;
}

.incorrect {
    color: var(--incorrect-red);
}

.correct {
    color: var(--correct-green);
}

.correctButton {
    /*
    background: var(--correct-green);
   */
    animation: correct-anim 0.6s ease;
    animation-fill-mode: forwards;
    color: #fafafa;
    box-shadow: inset 0px 0px 5px #555555;
    outline: none;
}

.incorrectButton {
    animation: incorrect-anim 0.8s ease;
    animation-fill-mode: forwards;
    color: #fafafa;
    box-shadow: inset 0px 0px 5px #555555;
    outline: none;
}

@keyframes incorrect-anim {
    100% {
        background-color: var(--incorrect-red);
    }
}

@keyframes correct-anim {
    100% {
        background-color: var(--correct-green);
    }
}</style></div><script type="application/javascript">var questionsuzBOxBBociUH=[{"question": "Where is the Van Schaik Publishers office?", "type": "multiple_choice", "answers": [{"answer": "Johannesburg", "correct": false, "feedback": "False."}, {"answer": "Cape Town", "correct": false, "feedback": "False."}, {"answer": "Hatfield", "correct": true, "feedback": "Correct."}, {"answer": "Durban", "correct": false, "feedback": "False."}]}];
    // Make a random ID
function makeid(length) {
    var result = [];
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result.push(characters.charAt(Math.floor(Math.random() * charactersLength)));
    }
    return result.join('');
}

// Choose a random subset of an array. Can also be used to shuffle the array
function getRandomSubarray(arr, size) {
    var shuffled = arr.slice(0), i = arr.length, temp, index;
    while (i--) {
        index = Math.floor((i + 1) * Math.random());
        temp = shuffled[index];
        shuffled[index] = shuffled[i];
        shuffled[i] = temp;
    }
    return shuffled.slice(0, size);
}

function printResponses(responsesContainer) {
    var responses=JSON.parse(responsesContainer.dataset.responses);
    var stringResponses='<B>IMPORTANT!</B>To preserve this answer sequence for submission, when you have finalized your answers: <ol> <li> Copy the text in this cell below "Answer String"</li> <li> Double click on the cell directly below the Answer String, labeled "Replace Me"</li> <li> Select the whole "Replace Me" text</li> <li> Paste in your answer string and press shift-Enter.</li><li>Save the notebook using the save icon or File->Save Notebook menu item</li></ul><br><br><br><b>Answer String:</b><br> ';
    console.log(responses);
    responses.forEach((response, index) => {
        if (response) {
            console.log(index + ': ' + response);
            stringResponses+= index + ': ' + response +"<BR>";
        }
    });
    responsesContainer.innerHTML=stringResponses;
}
function check_mc() {
    var id = this.id.split('-')[0];
    //var response = this.id.split('-')[1];
    //console.log(response);
    //console.log("In check_mc(), id="+id);
    //console.log(event.srcElement.id)           
    //console.log(event.srcElement.dataset.correct)   
    //console.log(event.srcElement.dataset.feedback)

    var label = event.srcElement;
    //console.log(label, label.nodeName);
    var depth = 0;
    while ((label.nodeName != "LABEL") && (depth < 20)) {
        label = label.parentElement;
        console.log(depth, label);
        depth++;
    }



    var answers = label.parentElement.children;

    //console.log(answers);


    // Split behavior based on multiple choice vs many choice:
    var fb = document.getElementById("fb" + id);




    if (fb.dataset.numcorrect == 1) {
        // What follows is for the saved responses stuff
        var outerContainer = fb.parentElement.parentElement;
        var responsesContainer = document.getElementById("responses" + outerContainer.id);
        if (responsesContainer) {
            //console.log(responsesContainer);
            var response = label.firstChild.innerText;
            if (label.querySelector(".QuizCode")){
                response+= label.querySelector(".QuizCode").firstChild.innerText;
            }
            console.log(response);
            //console.log(document.getElementById("quizWrap"+id));
            var qnum = document.getElementById("quizWrap"+id).dataset.qnum;
            console.log("Question " + qnum);
            //console.log(id, ", got numcorrect=",fb.dataset.numcorrect);
            var responses=JSON.parse(responsesContainer.dataset.responses);
            console.log(responses);
            responses[qnum]= response;
            responsesContainer.setAttribute('data-responses', JSON.stringify(responses));
            printResponses(responsesContainer);
        }
        // End code to preserve responses
        
        for (var i = 0; i < answers.length; i++) {
            var child = answers[i];
            //console.log(child);
            child.className = "MCButton";
        }



        if (label.dataset.correct == "true") {
            // console.log("Correct action");
            if ("feedback" in label.dataset) {
                fb.textContent = jaxify(label.dataset.feedback);
            } else {
                fb.textContent = "Correct!";
            }
            label.classList.add("correctButton");

            fb.className = "Feedback";
            fb.classList.add("correct");

        } else {
            if ("feedback" in label.dataset) {
                fb.textContent = jaxify(label.dataset.feedback);
            } else {
                fb.textContent = "Incorrect -- try again.";
            }
            //console.log("Error action");
            label.classList.add("incorrectButton");
            fb.className = "Feedback";
            fb.classList.add("incorrect");
        }
    }
    else {
        var reset = false;
        var feedback;
         if (label.dataset.correct == "true") {
            if ("feedback" in label.dataset) {
                feedback = jaxify(label.dataset.feedback);
            } else {
                feedback = "Correct!";
            }
            if (label.dataset.answered <= 0) {
                if (fb.dataset.answeredcorrect < 0) {
                    fb.dataset.answeredcorrect = 1;
                    reset = true;
                } else {
                    fb.dataset.answeredcorrect++;
                }
                if (reset) {
                    for (var i = 0; i < answers.length; i++) {
                        var child = answers[i];
                        child.className = "MCButton";
                        child.dataset.answered = 0;
                    }
                }
                label.classList.add("correctButton");
                label.dataset.answered = 1;
                fb.className = "Feedback";
                fb.classList.add("correct");

            }
        } else {
            if ("feedback" in label.dataset) {
                feedback = jaxify(label.dataset.feedback);
            } else {
                feedback = "Incorrect -- try again.";
            }
            if (fb.dataset.answeredcorrect > 0) {
                fb.dataset.answeredcorrect = -1;
                reset = true;
            } else {
                fb.dataset.answeredcorrect--;
            }

            if (reset) {
                for (var i = 0; i < answers.length; i++) {
                    var child = answers[i];
                    child.className = "MCButton";
                    child.dataset.answered = 0;
                }
            }
            label.classList.add("incorrectButton");
            fb.className = "Feedback";
            fb.classList.add("incorrect");
        }
        // What follows is for the saved responses stuff
        var outerContainer = fb.parentElement.parentElement;
        var responsesContainer = document.getElementById("responses" + outerContainer.id);
        if (responsesContainer) {
            //console.log(responsesContainer);
            var response = label.firstChild.innerText;
            if (label.querySelector(".QuizCode")){
                response+= label.querySelector(".QuizCode").firstChild.innerText;
            }
            console.log(response);
            //console.log(document.getElementById("quizWrap"+id));
            var qnum = document.getElementById("quizWrap"+id).dataset.qnum;
            console.log("Question " + qnum);
            //console.log(id, ", got numcorrect=",fb.dataset.numcorrect);
            var responses=JSON.parse(responsesContainer.dataset.responses);
            if (label.dataset.correct == "true") {
                if (typeof(responses[qnum]) == "object"){
                    if (!responses[qnum].includes(response))
                        responses[qnum].push(response);
                } else{
                    responses[qnum]= [ response ];
                }
            } else {
                responses[qnum]= response;
            }
            console.log(responses);
            responsesContainer.setAttribute('data-responses', JSON.stringify(responses));
            printResponses(responsesContainer);
        }
        // End save responses stuff



        var numcorrect = fb.dataset.numcorrect;
        var answeredcorrect = fb.dataset.answeredcorrect;
        if (answeredcorrect >= 0) {
            fb.textContent = feedback + " [" + answeredcorrect + "/" + numcorrect + "]";
        } else {
            fb.textContent = feedback + " [" + 0 + "/" + numcorrect + "]";
        }


    }

    if (typeof MathJax != 'undefined') {
        var version = MathJax.version;
        console.log('MathJax version', version);
        if (version[0] == "2") {
            MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
        } else if (version[0] == "3") {
            MathJax.typeset([fb]);
        }
    } else {
        console.log('MathJax not detected');
    }

}

function make_mc(qa, shuffle_answers, outerqDiv, qDiv, aDiv, id) {
    var shuffled;
    if (shuffle_answers == "True") {
        //console.log(shuffle_answers+" read as true");
        shuffled = getRandomSubarray(qa.answers, qa.answers.length);
    } else {
        //console.log(shuffle_answers+" read as false");
        shuffled = qa.answers;
    }


    var num_correct = 0;



    shuffled.forEach((item, index, ans_array) => {
        //console.log(answer);

        // Make input element
        var inp = document.createElement("input");
        inp.type = "radio";
        inp.id = "quizo" + id + index;
        inp.style = "display:none;";
        aDiv.append(inp);

        //Make label for input element
        var lab = document.createElement("label");
        lab.className = "MCButton";
        lab.id = id + '-' + index;
        lab.onclick = check_mc;
        var aSpan = document.createElement('span');
        aSpan.classsName = "";
        //qDiv.id="quizQn"+id+index;
        if ("answer" in item) {
            aSpan.innerHTML = jaxify(item.answer);
            //aSpan.innerHTML=item.answer;
        }
        lab.append(aSpan);

        // Create div for code inside question
        var codeSpan;
        if ("code" in item) {
            codeSpan = document.createElement('span');
            codeSpan.id = "code" + id + index;
            codeSpan.className = "QuizCode";
            var codePre = document.createElement('pre');
            codeSpan.append(codePre);
            var codeCode = document.createElement('code');
            codePre.append(codeCode);
            codeCode.innerHTML = item.code;
            lab.append(codeSpan);
            //console.log(codeSpan);
        }

        //lab.textContent=item.answer;

        // Set the data attributes for the answer
        lab.setAttribute('data-correct', item.correct);
        if (item.correct) {
            num_correct++;
        }
        if ("feedback" in item) {
            lab.setAttribute('data-feedback', item.feedback);
        }
        lab.setAttribute('data-answered', 0);

        aDiv.append(lab);

    });

    if (num_correct > 1) {
        outerqDiv.className = "ManyChoiceQn";
    } else {
        outerqDiv.className = "MultipleChoiceQn";
    }

    return num_correct;

}
function check_numeric(ths, event) {

    if (event.keyCode === 13) {
        ths.blur();

        var id = ths.id.split('-')[0];

        var submission = ths.value;
        if (submission.indexOf('/') != -1) {
            var sub_parts = submission.split('/');
            //console.log(sub_parts);
            submission = sub_parts[0] / sub_parts[1];
        }
        //console.log("Reader entered", submission);

        if ("precision" in ths.dataset) {
            var precision = ths.dataset.precision;
            // console.log("1:", submission)
            submission = Math.round((1 * submission + Number.EPSILON) * 10 ** precision) / 10 ** precision;
            // console.log("Rounded to ", submission, " precision=", precision  );
        }


        //console.log("In check_numeric(), id="+id);
        //console.log(event.srcElement.id)           
        //console.log(event.srcElement.dataset.feedback)

        var fb = document.getElementById("fb" + id);
        fb.style.display = "none";
        fb.textContent = "Incorrect -- try again.";

        var answers = JSON.parse(ths.dataset.answers);
        //console.log(answers);

        var defaultFB = "";
        var correct;
        var done = false;
        answers.every(answer => {
            //console.log(answer.type);

            correct = false;
            // if (answer.type=="value"){
            if ('value' in answer) {
                if (submission == answer.value) {
                    fb.textContent = jaxify(answer.feedback);
                    correct = answer.correct;
                    //console.log(answer.correct);
                    done = true;
                }
                // } else if (answer.type=="range") {
            } else if ('range' in answer) {
                //console.log(answer.range);
                if ((submission >= answer.range[0]) && (submission < answer.range[1])) {
                    fb.textContent = jaxify(answer.feedback);
                    correct = answer.correct;
                    //console.log(answer.correct);
                    done = true;
                }
            } else if (answer.type == "default") {
                defaultFB = answer.feedback;
            }
            if (done) {
                return false; // Break out of loop if this has been marked correct
            } else {
                return true; // Keep looking for case that includes this as a correct answer
            }
        });

        if ((!done) && (defaultFB != "")) {
            fb.innerHTML = jaxify(defaultFB);
            //console.log("Default feedback", defaultFB);
        }

        fb.style.display = "block";
        if (correct) {
            ths.className = "Input-text";
            ths.classList.add("correctButton");
            fb.className = "Feedback";
            fb.classList.add("correct");
        } else {
            ths.className = "Input-text";
            ths.classList.add("incorrectButton");
            fb.className = "Feedback";
            fb.classList.add("incorrect");
        }

        // What follows is for the saved responses stuff
        var outerContainer = fb.parentElement.parentElement;
        var responsesContainer = document.getElementById("responses" + outerContainer.id);
        if (responsesContainer) {
            console.log(submission);
            var qnum = document.getElementById("quizWrap"+id).dataset.qnum;
            //console.log("Question " + qnum);
            //console.log(id, ", got numcorrect=",fb.dataset.numcorrect);
            var responses=JSON.parse(responsesContainer.dataset.responses);
            console.log(responses);
            if (submission == ths.value){
                responses[qnum]= submission;
            } else {
                responses[qnum]= ths.value + "(" + submission +")";
            }
            responsesContainer.setAttribute('data-responses', JSON.stringify(responses));
            printResponses(responsesContainer);
        }
        // End code to preserve responses

        if (typeof MathJax != 'undefined') {
            var version = MathJax.version;
            console.log('MathJax version', version);
            if (version[0] == "2") {
                MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
            } else if (version[0] == "3") {
                MathJax.typeset([fb]);
            }
        } else {
            console.log('MathJax not detected');
        }
        return false;
    }

}

function isValid(el, charC) {
    //console.log("Input char: ", charC);
    if (charC == 46) {
        if (el.value.indexOf('.') === -1) {
            return true;
        } else if (el.value.indexOf('/') != -1) {
            var parts = el.value.split('/');
            if (parts[1].indexOf('.') === -1) {
                return true;
            }
        }
        else {
            return false;
        }
    } else if (charC == 47) {
        if (el.value.indexOf('/') === -1) {
            if ((el.value != "") && (el.value != ".")) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else if (charC == 45) {
        var edex = el.value.indexOf('e');
        if (edex == -1) {
            edex = el.value.indexOf('E');
        }

        if (el.value == "") {
            return true;
        } else if (edex == (el.value.length - 1)) { // If just after e or E
            return true;
        } else {
            return false;
        }
    } else if (charC == 101) { // "e"
        if ((el.value.indexOf('e') === -1) && (el.value.indexOf('E') === -1) && (el.value.indexOf('/') == -1)) {
            // Prev symbol must be digit or decimal point:
            if (el.value.slice(-1).search(/\d/) >= 0) {
                return true;
            } else if (el.value.slice(-1).search(/\./) >= 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        if (charC > 31 && (charC < 48 || charC > 57))
            return false;
    }
    return true;
}

function numeric_keypress(evnt) {
    var charC = (evnt.which) ? evnt.which : evnt.keyCode;

    if (charC == 13) {
        check_numeric(this, evnt);
    } else {
        return isValid(this, charC);
    }
}





function make_numeric(qa, outerqDiv, qDiv, aDiv, id) {



    //console.log(answer);


    outerqDiv.className = "NumericQn";
    aDiv.style.display = 'block';

    var lab = document.createElement("label");
    lab.className = "InpLabel";
    lab.textContent = "Type numeric answer here:";
    aDiv.append(lab);

    var inp = document.createElement("input");
    inp.type = "text";
    //inp.id="input-"+id;
    inp.id = id + "-0";
    inp.className = "Input-text";
    inp.setAttribute('data-answers', JSON.stringify(qa.answers));
    if ("precision" in qa) {
        inp.setAttribute('data-precision', qa.precision);
    }
    aDiv.append(inp);
    //console.log(inp);

    //inp.addEventListener("keypress", check_numeric);
    //inp.addEventListener("keypress", numeric_keypress);
    /*
    inp.addEventListener("keypress", function(event) {
        return numeric_keypress(this, event);
    }
                        );
                        */
    //inp.onkeypress="return numeric_keypress(this, event)";
    inp.onkeypress = numeric_keypress;
    inp.onpaste = event => false;

    inp.addEventListener("focus", function (event) {
        this.value = "";
        return false;
    }
    );


}
function jaxify(string) {
    var mystring = string;

    var count = 0;
    var loc = mystring.search(/([^\\]|^)(\$)/);

    var count2 = 0;
    var loc2 = mystring.search(/([^\\]|^)(\$\$)/);

    //console.log(loc);

    while ((loc >= 0) || (loc2 >= 0)) {

        /* Have to replace all the double $$ first with current implementation */
        if (loc2 >= 0) {
            if (count2 % 2 == 0) {
                mystring = mystring.replace(/([^\\]|^)(\$\$)/, "$1\\[");
            } else {
                mystring = mystring.replace(/([^\\]|^)(\$\$)/, "$1\\]");
            }
            count2++;
        } else {
            if (count % 2 == 0) {
                mystring = mystring.replace(/([^\\]|^)(\$)/, "$1\\(");
            } else {
                mystring = mystring.replace(/([^\\]|^)(\$)/, "$1\\)");
            }
            count++;
        }
        loc = mystring.search(/([^\\]|^)(\$)/);
        loc2 = mystring.search(/([^\\]|^)(\$\$)/);
        //console.log(mystring,", loc:",loc,", loc2:",loc2);
    }

    //console.log(mystring);
    return mystring;
}


function show_questions(json, mydiv) {
    console.log('show_questions');
    //var mydiv=document.getElementById(myid);
    var shuffle_questions = mydiv.dataset.shufflequestions;
    var num_questions = mydiv.dataset.numquestions;
    var shuffle_answers = mydiv.dataset.shuffleanswers;

    if (num_questions > json.length) {
        num_questions = json.length;
    }

    var questions;
    if ((num_questions < json.length) || (shuffle_questions == "True")) {
        //console.log(num_questions+","+json.length);
        questions = getRandomSubarray(json, num_questions);
    } else {
        questions = json;
    }

    //console.log("SQ: "+shuffle_questions+", NQ: " + num_questions + ", SA: ", shuffle_answers);

    // Iterate over questions
    questions.forEach((qa, index, array) => {
        //console.log(qa.question); 

        var id = makeid(8);
        //console.log(id);


        // Create Div to contain question and answers
        var iDiv = document.createElement('div');
        //iDiv.id = 'quizWrap' + id + index;
        iDiv.id = 'quizWrap' + id;
        iDiv.className = 'Quiz';
        iDiv.setAttribute('data-qnum', index);
        mydiv.appendChild(iDiv);
        // iDiv.innerHTML=qa.question;

        var outerqDiv = document.createElement('div');
        outerqDiv.id = "OuterquizQn" + id + index;

        iDiv.append(outerqDiv);

        // Create div to contain question part
        var qDiv = document.createElement('div');
        qDiv.id = "quizQn" + id + index;
        //qDiv.textContent=qa.question;
        qDiv.innerHTML = jaxify(qa.question);

        outerqDiv.append(qDiv);

        // Create div for code inside question
        var codeDiv;
        if ("code" in qa) {
            codeDiv = document.createElement('div');
            codeDiv.id = "code" + id + index;
            codeDiv.className = "QuizCode";
            var codePre = document.createElement('pre');
            codeDiv.append(codePre);
            var codeCode = document.createElement('code');
            codePre.append(codeCode);
            codeCode.innerHTML = qa.code;
            outerqDiv.append(codeDiv);
            //console.log(codeDiv);
        }


        // Create div to contain answer part
        var aDiv = document.createElement('div');
        aDiv.id = "quizAns" + id + index;
        aDiv.className = 'Answer';
        iDiv.append(aDiv);

        //console.log(qa.type);

        var num_correct;
        if (qa.type == "multiple_choice") {
            num_correct = make_mc(qa, shuffle_answers, outerqDiv, qDiv, aDiv, id);
        } else if (qa.type == "many_choice") {
            num_correct = make_mc(qa, shuffle_answers, outerqDiv, qDiv, aDiv, id);
        } else if (qa.type == "numeric") {
            //console.log("numeric");
            make_numeric(qa, outerqDiv, qDiv, aDiv, id);
        }


        //Make div for feedback
        var fb = document.createElement("div");
        fb.id = "fb" + id;
        //fb.style="font-size: 20px;text-align:center;";
        fb.className = "Feedback";
        fb.setAttribute("data-answeredcorrect", 0);
        fb.setAttribute("data-numcorrect", num_correct);
        iDiv.append(fb);


    });
    var preserveResponses = mydiv.dataset.preserveresponses;
    console.log(preserveResponses);
    console.log(preserveResponses == "true");
    if (preserveResponses == "true") {
        console.log(preserveResponses);
        // Create Div to contain record of answers
        var iDiv = document.createElement('div');
        iDiv.id = 'responses' + mydiv.id;
        iDiv.className = 'JCResponses';
        // Create a place to store responses as an empty array
        iDiv.setAttribute('data-responses', '[]');

        // Dummy Text
        iDiv.innerHTML="<b>Select your answers and then follow the directions that will appear here.</b>"
        //iDiv.className = 'Quiz';
        mydiv.appendChild(iDiv);
    }
//console.log("At end of show_questions");
    if (typeof MathJax != 'undefined') {
        console.log("MathJax version", MathJax.version);
        var version = MathJax.version;
        setTimeout(function(){
            var version = MathJax.version;
            console.log('After sleep, MathJax version', version);
            if (version[0] == "2") {
                MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
            } else if (version[0] == "3") {
                MathJax.typeset([mydiv]);
            }
        }, 500);
if (typeof version == 'undefined') {
        } else
        {
            if (version[0] == "2") {
                MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
            } else if (version[0] == "3") {
                MathJax.typeset([mydiv]);
            } else {
                console.log("MathJax not found");
            }
        }
    }
    return false;
}

        {
        show_questions(questionsuzBOxBBociUH,  uzBOxBBociUH);
        }
        </script></div>
</div>
</section>
<section id="question-2">
<h2>Question 2<a class="headerlink" href="#question-2" title="Permalink to this headline">#</a></h2>
<div class="cell tag_remove-input docutils container">
</div>
<div class="cell tag_remove-input docutils container">
<div class="cell_output docutils container">
<div class="output text_html"><div id="rNPqHVietkZl" data-shufflequestions="False"
               data-shuffleanswers="True"
               data-preserveresponses="false"
               data-numquestions="1000000"> <style>:root {
    --medium-slate-blue: #6f78ffff;
    --orange-pantone: #f75c03ff;
    --russian-violet: #392061ff;
    --maximum-yellow-red: #ffc857ff;
    --viridian-green: #119da4ff;
    --incorrect-red: #c80202;
    --correct-green: #009113;
}

.Quiz {
    max-width: 600px;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 15px;
    padding-bottom: 4px;
    padding-top: 4px;
    line-height: 1.1;
    font-size: 16pt;
}

.QuizCode {
    font-size: 14pt;
    margin-top: 10px;
    margin-left: 20px;
    margin-right: 20px;
}

.QuizCode>pre {
    padding: 4px;
}

.Answer {
    margin: 10px 0;
    display: grid;
    grid-template-columns: auto auto;
    grid-gap: 10px;
}

.Feedback {
    font-size: 16pt;
    text-align: center;
    min-height: 2em;
}

.Input {
    align: left;
    font-size: 20pt;
}

.Input-text {
    display: block;
    margin: 10px;
    color: inherit;
    width: 140px;
    background-color: #c0c0c0;
    color: #fff;
    padding: 5px;
    padding-left: 10px;
    font-family: inherit;
    font-size: 20px;
    font-weight: inherit;
    line-height: 20pt;
    border: none;
    border-radius: 0.2rem;
    transition: box-shadow 0.1s);
}

.Input-text:focus {
    outline: none;
    background-color: #c0c0c0;
    box-shadow: 0.6rem 0.8rem 1.4rem -0.5rem #999999;
}

.MCButton {
    background: #fafafa;
    border: 1px solid #eee;
    border-radius: 10px;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
}

.MCButton p {
    color: inherit;
}

.MultipleChoiceQn {
    padding: 10px;
    background: var(--medium-slate-blue);
    color: #fafafa;
    border-radius: 10px;
}

.ManyChoiceQn {
    padding: 10px;
    background: var(--orange-pantone);
    color: #fafafa;
    border-radius: 10px;
}

.NumericQn {
    padding: 10px;
    background: var(--russian-violet);
    color: #fafafa;
    border-radius: 10px;
}

.NumericQn p {
    color: inherit;
}

.InpLabel {
    line-height: 34px;
    float: left;
    margin-right: 10px;
    color: #101010;
    font-size: 15pt;
}

.incorrect {
    color: var(--incorrect-red);
}

.correct {
    color: var(--correct-green);
}

.correctButton {
    /*
    background: var(--correct-green);
   */
    animation: correct-anim 0.6s ease;
    animation-fill-mode: forwards;
    color: #fafafa;
    box-shadow: inset 0px 0px 5px #555555;
    outline: none;
}

.incorrectButton {
    animation: incorrect-anim 0.8s ease;
    animation-fill-mode: forwards;
    color: #fafafa;
    box-shadow: inset 0px 0px 5px #555555;
    outline: none;
}

@keyframes incorrect-anim {
    100% {
        background-color: var(--incorrect-red);
    }
}

@keyframes correct-anim {
    100% {
        background-color: var(--correct-green);
    }
}</style></div><script type="application/javascript">var questionsrNPqHVietkZl=[{"question": "Enter the value of pi (will be checked to 2 decimal places):", "type": "numeric", "precision": 2, "answers": [{"type": "value", "value": 3.14, "correct": true, "feedback": "Correct."}, {"type": "range", "range": [3.142857, 3.142858], "correct": true, "feedback": "True to 2 decimal places, but you know pi is not really 22/7, right?"}, {"type": "range", "range": [-100000000, 0], "correct": false, "feedback": "pi is the AREA of a circle of radius 1. Try again."}, {"type": "default", "feedback": "pi is the area of a circle of radius 1. Try again."}]}];
    // Make a random ID
function makeid(length) {
    var result = [];
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result.push(characters.charAt(Math.floor(Math.random() * charactersLength)));
    }
    return result.join('');
}

// Choose a random subset of an array. Can also be used to shuffle the array
function getRandomSubarray(arr, size) {
    var shuffled = arr.slice(0), i = arr.length, temp, index;
    while (i--) {
        index = Math.floor((i + 1) * Math.random());
        temp = shuffled[index];
        shuffled[index] = shuffled[i];
        shuffled[i] = temp;
    }
    return shuffled.slice(0, size);
}

function printResponses(responsesContainer) {
    var responses=JSON.parse(responsesContainer.dataset.responses);
    var stringResponses='<B>IMPORTANT!</B>To preserve this answer sequence for submission, when you have finalized your answers: <ol> <li> Copy the text in this cell below "Answer String"</li> <li> Double click on the cell directly below the Answer String, labeled "Replace Me"</li> <li> Select the whole "Replace Me" text</li> <li> Paste in your answer string and press shift-Enter.</li><li>Save the notebook using the save icon or File->Save Notebook menu item</li></ul><br><br><br><b>Answer String:</b><br> ';
    console.log(responses);
    responses.forEach((response, index) => {
        if (response) {
            console.log(index + ': ' + response);
            stringResponses+= index + ': ' + response +"<BR>";
        }
    });
    responsesContainer.innerHTML=stringResponses;
}
function check_mc() {
    var id = this.id.split('-')[0];
    //var response = this.id.split('-')[1];
    //console.log(response);
    //console.log("In check_mc(), id="+id);
    //console.log(event.srcElement.id)           
    //console.log(event.srcElement.dataset.correct)   
    //console.log(event.srcElement.dataset.feedback)

    var label = event.srcElement;
    //console.log(label, label.nodeName);
    var depth = 0;
    while ((label.nodeName != "LABEL") && (depth < 20)) {
        label = label.parentElement;
        console.log(depth, label);
        depth++;
    }



    var answers = label.parentElement.children;

    //console.log(answers);


    // Split behavior based on multiple choice vs many choice:
    var fb = document.getElementById("fb" + id);




    if (fb.dataset.numcorrect == 1) {
        // What follows is for the saved responses stuff
        var outerContainer = fb.parentElement.parentElement;
        var responsesContainer = document.getElementById("responses" + outerContainer.id);
        if (responsesContainer) {
            //console.log(responsesContainer);
            var response = label.firstChild.innerText;
            if (label.querySelector(".QuizCode")){
                response+= label.querySelector(".QuizCode").firstChild.innerText;
            }
            console.log(response);
            //console.log(document.getElementById("quizWrap"+id));
            var qnum = document.getElementById("quizWrap"+id).dataset.qnum;
            console.log("Question " + qnum);
            //console.log(id, ", got numcorrect=",fb.dataset.numcorrect);
            var responses=JSON.parse(responsesContainer.dataset.responses);
            console.log(responses);
            responses[qnum]= response;
            responsesContainer.setAttribute('data-responses', JSON.stringify(responses));
            printResponses(responsesContainer);
        }
        // End code to preserve responses
        
        for (var i = 0; i < answers.length; i++) {
            var child = answers[i];
            //console.log(child);
            child.className = "MCButton";
        }



        if (label.dataset.correct == "true") {
            // console.log("Correct action");
            if ("feedback" in label.dataset) {
                fb.textContent = jaxify(label.dataset.feedback);
            } else {
                fb.textContent = "Correct!";
            }
            label.classList.add("correctButton");

            fb.className = "Feedback";
            fb.classList.add("correct");

        } else {
            if ("feedback" in label.dataset) {
                fb.textContent = jaxify(label.dataset.feedback);
            } else {
                fb.textContent = "Incorrect -- try again.";
            }
            //console.log("Error action");
            label.classList.add("incorrectButton");
            fb.className = "Feedback";
            fb.classList.add("incorrect");
        }
    }
    else {
        var reset = false;
        var feedback;
         if (label.dataset.correct == "true") {
            if ("feedback" in label.dataset) {
                feedback = jaxify(label.dataset.feedback);
            } else {
                feedback = "Correct!";
            }
            if (label.dataset.answered <= 0) {
                if (fb.dataset.answeredcorrect < 0) {
                    fb.dataset.answeredcorrect = 1;
                    reset = true;
                } else {
                    fb.dataset.answeredcorrect++;
                }
                if (reset) {
                    for (var i = 0; i < answers.length; i++) {
                        var child = answers[i];
                        child.className = "MCButton";
                        child.dataset.answered = 0;
                    }
                }
                label.classList.add("correctButton");
                label.dataset.answered = 1;
                fb.className = "Feedback";
                fb.classList.add("correct");

            }
        } else {
            if ("feedback" in label.dataset) {
                feedback = jaxify(label.dataset.feedback);
            } else {
                feedback = "Incorrect -- try again.";
            }
            if (fb.dataset.answeredcorrect > 0) {
                fb.dataset.answeredcorrect = -1;
                reset = true;
            } else {
                fb.dataset.answeredcorrect--;
            }

            if (reset) {
                for (var i = 0; i < answers.length; i++) {
                    var child = answers[i];
                    child.className = "MCButton";
                    child.dataset.answered = 0;
                }
            }
            label.classList.add("incorrectButton");
            fb.className = "Feedback";
            fb.classList.add("incorrect");
        }
        // What follows is for the saved responses stuff
        var outerContainer = fb.parentElement.parentElement;
        var responsesContainer = document.getElementById("responses" + outerContainer.id);
        if (responsesContainer) {
            //console.log(responsesContainer);
            var response = label.firstChild.innerText;
            if (label.querySelector(".QuizCode")){
                response+= label.querySelector(".QuizCode").firstChild.innerText;
            }
            console.log(response);
            //console.log(document.getElementById("quizWrap"+id));
            var qnum = document.getElementById("quizWrap"+id).dataset.qnum;
            console.log("Question " + qnum);
            //console.log(id, ", got numcorrect=",fb.dataset.numcorrect);
            var responses=JSON.parse(responsesContainer.dataset.responses);
            if (label.dataset.correct == "true") {
                if (typeof(responses[qnum]) == "object"){
                    if (!responses[qnum].includes(response))
                        responses[qnum].push(response);
                } else{
                    responses[qnum]= [ response ];
                }
            } else {
                responses[qnum]= response;
            }
            console.log(responses);
            responsesContainer.setAttribute('data-responses', JSON.stringify(responses));
            printResponses(responsesContainer);
        }
        // End save responses stuff



        var numcorrect = fb.dataset.numcorrect;
        var answeredcorrect = fb.dataset.answeredcorrect;
        if (answeredcorrect >= 0) {
            fb.textContent = feedback + " [" + answeredcorrect + "/" + numcorrect + "]";
        } else {
            fb.textContent = feedback + " [" + 0 + "/" + numcorrect + "]";
        }


    }

    if (typeof MathJax != 'undefined') {
        var version = MathJax.version;
        console.log('MathJax version', version);
        if (version[0] == "2") {
            MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
        } else if (version[0] == "3") {
            MathJax.typeset([fb]);
        }
    } else {
        console.log('MathJax not detected');
    }

}

function make_mc(qa, shuffle_answers, outerqDiv, qDiv, aDiv, id) {
    var shuffled;
    if (shuffle_answers == "True") {
        //console.log(shuffle_answers+" read as true");
        shuffled = getRandomSubarray(qa.answers, qa.answers.length);
    } else {
        //console.log(shuffle_answers+" read as false");
        shuffled = qa.answers;
    }


    var num_correct = 0;



    shuffled.forEach((item, index, ans_array) => {
        //console.log(answer);

        // Make input element
        var inp = document.createElement("input");
        inp.type = "radio";
        inp.id = "quizo" + id + index;
        inp.style = "display:none;";
        aDiv.append(inp);

        //Make label for input element
        var lab = document.createElement("label");
        lab.className = "MCButton";
        lab.id = id + '-' + index;
        lab.onclick = check_mc;
        var aSpan = document.createElement('span');
        aSpan.classsName = "";
        //qDiv.id="quizQn"+id+index;
        if ("answer" in item) {
            aSpan.innerHTML = jaxify(item.answer);
            //aSpan.innerHTML=item.answer;
        }
        lab.append(aSpan);

        // Create div for code inside question
        var codeSpan;
        if ("code" in item) {
            codeSpan = document.createElement('span');
            codeSpan.id = "code" + id + index;
            codeSpan.className = "QuizCode";
            var codePre = document.createElement('pre');
            codeSpan.append(codePre);
            var codeCode = document.createElement('code');
            codePre.append(codeCode);
            codeCode.innerHTML = item.code;
            lab.append(codeSpan);
            //console.log(codeSpan);
        }

        //lab.textContent=item.answer;

        // Set the data attributes for the answer
        lab.setAttribute('data-correct', item.correct);
        if (item.correct) {
            num_correct++;
        }
        if ("feedback" in item) {
            lab.setAttribute('data-feedback', item.feedback);
        }
        lab.setAttribute('data-answered', 0);

        aDiv.append(lab);

    });

    if (num_correct > 1) {
        outerqDiv.className = "ManyChoiceQn";
    } else {
        outerqDiv.className = "MultipleChoiceQn";
    }

    return num_correct;

}
function check_numeric(ths, event) {

    if (event.keyCode === 13) {
        ths.blur();

        var id = ths.id.split('-')[0];

        var submission = ths.value;
        if (submission.indexOf('/') != -1) {
            var sub_parts = submission.split('/');
            //console.log(sub_parts);
            submission = sub_parts[0] / sub_parts[1];
        }
        //console.log("Reader entered", submission);

        if ("precision" in ths.dataset) {
            var precision = ths.dataset.precision;
            // console.log("1:", submission)
            submission = Math.round((1 * submission + Number.EPSILON) * 10 ** precision) / 10 ** precision;
            // console.log("Rounded to ", submission, " precision=", precision  );
        }


        //console.log("In check_numeric(), id="+id);
        //console.log(event.srcElement.id)           
        //console.log(event.srcElement.dataset.feedback)

        var fb = document.getElementById("fb" + id);
        fb.style.display = "none";
        fb.textContent = "Incorrect -- try again.";

        var answers = JSON.parse(ths.dataset.answers);
        //console.log(answers);

        var defaultFB = "";
        var correct;
        var done = false;
        answers.every(answer => {
            //console.log(answer.type);

            correct = false;
            // if (answer.type=="value"){
            if ('value' in answer) {
                if (submission == answer.value) {
                    fb.textContent = jaxify(answer.feedback);
                    correct = answer.correct;
                    //console.log(answer.correct);
                    done = true;
                }
                // } else if (answer.type=="range") {
            } else if ('range' in answer) {
                //console.log(answer.range);
                if ((submission >= answer.range[0]) && (submission < answer.range[1])) {
                    fb.textContent = jaxify(answer.feedback);
                    correct = answer.correct;
                    //console.log(answer.correct);
                    done = true;
                }
            } else if (answer.type == "default") {
                defaultFB = answer.feedback;
            }
            if (done) {
                return false; // Break out of loop if this has been marked correct
            } else {
                return true; // Keep looking for case that includes this as a correct answer
            }
        });

        if ((!done) && (defaultFB != "")) {
            fb.innerHTML = jaxify(defaultFB);
            //console.log("Default feedback", defaultFB);
        }

        fb.style.display = "block";
        if (correct) {
            ths.className = "Input-text";
            ths.classList.add("correctButton");
            fb.className = "Feedback";
            fb.classList.add("correct");
        } else {
            ths.className = "Input-text";
            ths.classList.add("incorrectButton");
            fb.className = "Feedback";
            fb.classList.add("incorrect");
        }

        // What follows is for the saved responses stuff
        var outerContainer = fb.parentElement.parentElement;
        var responsesContainer = document.getElementById("responses" + outerContainer.id);
        if (responsesContainer) {
            console.log(submission);
            var qnum = document.getElementById("quizWrap"+id).dataset.qnum;
            //console.log("Question " + qnum);
            //console.log(id, ", got numcorrect=",fb.dataset.numcorrect);
            var responses=JSON.parse(responsesContainer.dataset.responses);
            console.log(responses);
            if (submission == ths.value){
                responses[qnum]= submission;
            } else {
                responses[qnum]= ths.value + "(" + submission +")";
            }
            responsesContainer.setAttribute('data-responses', JSON.stringify(responses));
            printResponses(responsesContainer);
        }
        // End code to preserve responses

        if (typeof MathJax != 'undefined') {
            var version = MathJax.version;
            console.log('MathJax version', version);
            if (version[0] == "2") {
                MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
            } else if (version[0] == "3") {
                MathJax.typeset([fb]);
            }
        } else {
            console.log('MathJax not detected');
        }
        return false;
    }

}

function isValid(el, charC) {
    //console.log("Input char: ", charC);
    if (charC == 46) {
        if (el.value.indexOf('.') === -1) {
            return true;
        } else if (el.value.indexOf('/') != -1) {
            var parts = el.value.split('/');
            if (parts[1].indexOf('.') === -1) {
                return true;
            }
        }
        else {
            return false;
        }
    } else if (charC == 47) {
        if (el.value.indexOf('/') === -1) {
            if ((el.value != "") && (el.value != ".")) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else if (charC == 45) {
        var edex = el.value.indexOf('e');
        if (edex == -1) {
            edex = el.value.indexOf('E');
        }

        if (el.value == "") {
            return true;
        } else if (edex == (el.value.length - 1)) { // If just after e or E
            return true;
        } else {
            return false;
        }
    } else if (charC == 101) { // "e"
        if ((el.value.indexOf('e') === -1) && (el.value.indexOf('E') === -1) && (el.value.indexOf('/') == -1)) {
            // Prev symbol must be digit or decimal point:
            if (el.value.slice(-1).search(/\d/) >= 0) {
                return true;
            } else if (el.value.slice(-1).search(/\./) >= 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        if (charC > 31 && (charC < 48 || charC > 57))
            return false;
    }
    return true;
}

function numeric_keypress(evnt) {
    var charC = (evnt.which) ? evnt.which : evnt.keyCode;

    if (charC == 13) {
        check_numeric(this, evnt);
    } else {
        return isValid(this, charC);
    }
}





function make_numeric(qa, outerqDiv, qDiv, aDiv, id) {



    //console.log(answer);


    outerqDiv.className = "NumericQn";
    aDiv.style.display = 'block';

    var lab = document.createElement("label");
    lab.className = "InpLabel";
    lab.textContent = "Type numeric answer here:";
    aDiv.append(lab);

    var inp = document.createElement("input");
    inp.type = "text";
    //inp.id="input-"+id;
    inp.id = id + "-0";
    inp.className = "Input-text";
    inp.setAttribute('data-answers', JSON.stringify(qa.answers));
    if ("precision" in qa) {
        inp.setAttribute('data-precision', qa.precision);
    }
    aDiv.append(inp);
    //console.log(inp);

    //inp.addEventListener("keypress", check_numeric);
    //inp.addEventListener("keypress", numeric_keypress);
    /*
    inp.addEventListener("keypress", function(event) {
        return numeric_keypress(this, event);
    }
                        );
                        */
    //inp.onkeypress="return numeric_keypress(this, event)";
    inp.onkeypress = numeric_keypress;
    inp.onpaste = event => false;

    inp.addEventListener("focus", function (event) {
        this.value = "";
        return false;
    }
    );


}
function jaxify(string) {
    var mystring = string;

    var count = 0;
    var loc = mystring.search(/([^\\]|^)(\$)/);

    var count2 = 0;
    var loc2 = mystring.search(/([^\\]|^)(\$\$)/);

    //console.log(loc);

    while ((loc >= 0) || (loc2 >= 0)) {

        /* Have to replace all the double $$ first with current implementation */
        if (loc2 >= 0) {
            if (count2 % 2 == 0) {
                mystring = mystring.replace(/([^\\]|^)(\$\$)/, "$1\\[");
            } else {
                mystring = mystring.replace(/([^\\]|^)(\$\$)/, "$1\\]");
            }
            count2++;
        } else {
            if (count % 2 == 0) {
                mystring = mystring.replace(/([^\\]|^)(\$)/, "$1\\(");
            } else {
                mystring = mystring.replace(/([^\\]|^)(\$)/, "$1\\)");
            }
            count++;
        }
        loc = mystring.search(/([^\\]|^)(\$)/);
        loc2 = mystring.search(/([^\\]|^)(\$\$)/);
        //console.log(mystring,", loc:",loc,", loc2:",loc2);
    }

    //console.log(mystring);
    return mystring;
}


function show_questions(json, mydiv) {
    console.log('show_questions');
    //var mydiv=document.getElementById(myid);
    var shuffle_questions = mydiv.dataset.shufflequestions;
    var num_questions = mydiv.dataset.numquestions;
    var shuffle_answers = mydiv.dataset.shuffleanswers;

    if (num_questions > json.length) {
        num_questions = json.length;
    }

    var questions;
    if ((num_questions < json.length) || (shuffle_questions == "True")) {
        //console.log(num_questions+","+json.length);
        questions = getRandomSubarray(json, num_questions);
    } else {
        questions = json;
    }

    //console.log("SQ: "+shuffle_questions+", NQ: " + num_questions + ", SA: ", shuffle_answers);

    // Iterate over questions
    questions.forEach((qa, index, array) => {
        //console.log(qa.question); 

        var id = makeid(8);
        //console.log(id);


        // Create Div to contain question and answers
        var iDiv = document.createElement('div');
        //iDiv.id = 'quizWrap' + id + index;
        iDiv.id = 'quizWrap' + id;
        iDiv.className = 'Quiz';
        iDiv.setAttribute('data-qnum', index);
        mydiv.appendChild(iDiv);
        // iDiv.innerHTML=qa.question;

        var outerqDiv = document.createElement('div');
        outerqDiv.id = "OuterquizQn" + id + index;

        iDiv.append(outerqDiv);

        // Create div to contain question part
        var qDiv = document.createElement('div');
        qDiv.id = "quizQn" + id + index;
        //qDiv.textContent=qa.question;
        qDiv.innerHTML = jaxify(qa.question);

        outerqDiv.append(qDiv);

        // Create div for code inside question
        var codeDiv;
        if ("code" in qa) {
            codeDiv = document.createElement('div');
            codeDiv.id = "code" + id + index;
            codeDiv.className = "QuizCode";
            var codePre = document.createElement('pre');
            codeDiv.append(codePre);
            var codeCode = document.createElement('code');
            codePre.append(codeCode);
            codeCode.innerHTML = qa.code;
            outerqDiv.append(codeDiv);
            //console.log(codeDiv);
        }


        // Create div to contain answer part
        var aDiv = document.createElement('div');
        aDiv.id = "quizAns" + id + index;
        aDiv.className = 'Answer';
        iDiv.append(aDiv);

        //console.log(qa.type);

        var num_correct;
        if (qa.type == "multiple_choice") {
            num_correct = make_mc(qa, shuffle_answers, outerqDiv, qDiv, aDiv, id);
        } else if (qa.type == "many_choice") {
            num_correct = make_mc(qa, shuffle_answers, outerqDiv, qDiv, aDiv, id);
        } else if (qa.type == "numeric") {
            //console.log("numeric");
            make_numeric(qa, outerqDiv, qDiv, aDiv, id);
        }


        //Make div for feedback
        var fb = document.createElement("div");
        fb.id = "fb" + id;
        //fb.style="font-size: 20px;text-align:center;";
        fb.className = "Feedback";
        fb.setAttribute("data-answeredcorrect", 0);
        fb.setAttribute("data-numcorrect", num_correct);
        iDiv.append(fb);


    });
    var preserveResponses = mydiv.dataset.preserveresponses;
    console.log(preserveResponses);
    console.log(preserveResponses == "true");
    if (preserveResponses == "true") {
        console.log(preserveResponses);
        // Create Div to contain record of answers
        var iDiv = document.createElement('div');
        iDiv.id = 'responses' + mydiv.id;
        iDiv.className = 'JCResponses';
        // Create a place to store responses as an empty array
        iDiv.setAttribute('data-responses', '[]');

        // Dummy Text
        iDiv.innerHTML="<b>Select your answers and then follow the directions that will appear here.</b>"
        //iDiv.className = 'Quiz';
        mydiv.appendChild(iDiv);
    }
//console.log("At end of show_questions");
    if (typeof MathJax != 'undefined') {
        console.log("MathJax version", MathJax.version);
        var version = MathJax.version;
        setTimeout(function(){
            var version = MathJax.version;
            console.log('After sleep, MathJax version', version);
            if (version[0] == "2") {
                MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
            } else if (version[0] == "3") {
                MathJax.typeset([mydiv]);
            }
        }, 500);
if (typeof version == 'undefined') {
        } else
        {
            if (version[0] == "2") {
                MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
            } else if (version[0] == "3") {
                MathJax.typeset([mydiv]);
            } else {
                console.log("MathJax not found");
            }
        }
    }
    return false;
}

        {
        show_questions(questionsrNPqHVietkZl,  rNPqHVietkZl);
        }
        </script></div>
</div>
</section>
<section id="question-3">
<h2>Question 3<a class="headerlink" href="#question-3" title="Permalink to this headline">#</a></h2>
<div class="cell tag_remove-input docutils container">
</div>
<div class="cell tag_remove-input docutils container">
<div class="cell_output docutils container">
<div class="output text_html"><div id="qwpylRlMPkOo" data-shufflequestions="False"
               data-shuffleanswers="True"
               data-preserveresponses="false"
               data-numquestions="1000000"> <style>:root {
    --medium-slate-blue: #6f78ffff;
    --orange-pantone: #f75c03ff;
    --russian-violet: #392061ff;
    --maximum-yellow-red: #ffc857ff;
    --viridian-green: #119da4ff;
    --incorrect-red: #c80202;
    --correct-green: #009113;
}

.Quiz {
    max-width: 600px;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 15px;
    padding-bottom: 4px;
    padding-top: 4px;
    line-height: 1.1;
    font-size: 16pt;
}

.QuizCode {
    font-size: 14pt;
    margin-top: 10px;
    margin-left: 20px;
    margin-right: 20px;
}

.QuizCode>pre {
    padding: 4px;
}

.Answer {
    margin: 10px 0;
    display: grid;
    grid-template-columns: auto auto;
    grid-gap: 10px;
}

.Feedback {
    font-size: 16pt;
    text-align: center;
    min-height: 2em;
}

.Input {
    align: left;
    font-size: 20pt;
}

.Input-text {
    display: block;
    margin: 10px;
    color: inherit;
    width: 140px;
    background-color: #c0c0c0;
    color: #fff;
    padding: 5px;
    padding-left: 10px;
    font-family: inherit;
    font-size: 20px;
    font-weight: inherit;
    line-height: 20pt;
    border: none;
    border-radius: 0.2rem;
    transition: box-shadow 0.1s);
}

.Input-text:focus {
    outline: none;
    background-color: #c0c0c0;
    box-shadow: 0.6rem 0.8rem 1.4rem -0.5rem #999999;
}

.MCButton {
    background: #fafafa;
    border: 1px solid #eee;
    border-radius: 10px;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
}

.MCButton p {
    color: inherit;
}

.MultipleChoiceQn {
    padding: 10px;
    background: var(--medium-slate-blue);
    color: #fafafa;
    border-radius: 10px;
}

.ManyChoiceQn {
    padding: 10px;
    background: var(--orange-pantone);
    color: #fafafa;
    border-radius: 10px;
}

.NumericQn {
    padding: 10px;
    background: var(--russian-violet);
    color: #fafafa;
    border-radius: 10px;
}

.NumericQn p {
    color: inherit;
}

.InpLabel {
    line-height: 34px;
    float: left;
    margin-right: 10px;
    color: #101010;
    font-size: 15pt;
}

.incorrect {
    color: var(--incorrect-red);
}

.correct {
    color: var(--correct-green);
}

.correctButton {
    /*
    background: var(--correct-green);
   */
    animation: correct-anim 0.6s ease;
    animation-fill-mode: forwards;
    color: #fafafa;
    box-shadow: inset 0px 0px 5px #555555;
    outline: none;
}

.incorrectButton {
    animation: incorrect-anim 0.8s ease;
    animation-fill-mode: forwards;
    color: #fafafa;
    box-shadow: inset 0px 0px 5px #555555;
    outline: none;
}

@keyframes incorrect-anim {
    100% {
        background-color: var(--incorrect-red);
    }
}

@keyframes correct-anim {
    100% {
        background-color: var(--correct-green);
    }
}</style></div><script type="application/javascript">var questionsqwpylRlMPkOo=[{"question": "Choose all of the following that can be included in Jupyter notebooks?", "type": "many_choice", "answers": [{"answer": "Text and graphics output from Python", "correct": true, "feedback": "Correct."}, {"answer": "Typeset mathematics", "correct": true, "feedback": "Correct."}, {"answer": "Python executable code", "correct": true, "feedback": "Correct."}, {"answer": "Formatted text", "correct": true, "feedback": "Correct."}, {"answer": "Live snakes via Python", "correct": false, "feedback": "I hope not."}]}];
    // Make a random ID
function makeid(length) {
    var result = [];
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result.push(characters.charAt(Math.floor(Math.random() * charactersLength)));
    }
    return result.join('');
}

// Choose a random subset of an array. Can also be used to shuffle the array
function getRandomSubarray(arr, size) {
    var shuffled = arr.slice(0), i = arr.length, temp, index;
    while (i--) {
        index = Math.floor((i + 1) * Math.random());
        temp = shuffled[index];
        shuffled[index] = shuffled[i];
        shuffled[i] = temp;
    }
    return shuffled.slice(0, size);
}

function printResponses(responsesContainer) {
    var responses=JSON.parse(responsesContainer.dataset.responses);
    var stringResponses='<B>IMPORTANT!</B>To preserve this answer sequence for submission, when you have finalized your answers: <ol> <li> Copy the text in this cell below "Answer String"</li> <li> Double click on the cell directly below the Answer String, labeled "Replace Me"</li> <li> Select the whole "Replace Me" text</li> <li> Paste in your answer string and press shift-Enter.</li><li>Save the notebook using the save icon or File->Save Notebook menu item</li></ul><br><br><br><b>Answer String:</b><br> ';
    console.log(responses);
    responses.forEach((response, index) => {
        if (response) {
            console.log(index + ': ' + response);
            stringResponses+= index + ': ' + response +"<BR>";
        }
    });
    responsesContainer.innerHTML=stringResponses;
}
function check_mc() {
    var id = this.id.split('-')[0];
    //var response = this.id.split('-')[1];
    //console.log(response);
    //console.log("In check_mc(), id="+id);
    //console.log(event.srcElement.id)           
    //console.log(event.srcElement.dataset.correct)   
    //console.log(event.srcElement.dataset.feedback)

    var label = event.srcElement;
    //console.log(label, label.nodeName);
    var depth = 0;
    while ((label.nodeName != "LABEL") && (depth < 20)) {
        label = label.parentElement;
        console.log(depth, label);
        depth++;
    }



    var answers = label.parentElement.children;

    //console.log(answers);


    // Split behavior based on multiple choice vs many choice:
    var fb = document.getElementById("fb" + id);




    if (fb.dataset.numcorrect == 1) {
        // What follows is for the saved responses stuff
        var outerContainer = fb.parentElement.parentElement;
        var responsesContainer = document.getElementById("responses" + outerContainer.id);
        if (responsesContainer) {
            //console.log(responsesContainer);
            var response = label.firstChild.innerText;
            if (label.querySelector(".QuizCode")){
                response+= label.querySelector(".QuizCode").firstChild.innerText;
            }
            console.log(response);
            //console.log(document.getElementById("quizWrap"+id));
            var qnum = document.getElementById("quizWrap"+id).dataset.qnum;
            console.log("Question " + qnum);
            //console.log(id, ", got numcorrect=",fb.dataset.numcorrect);
            var responses=JSON.parse(responsesContainer.dataset.responses);
            console.log(responses);
            responses[qnum]= response;
            responsesContainer.setAttribute('data-responses', JSON.stringify(responses));
            printResponses(responsesContainer);
        }
        // End code to preserve responses
        
        for (var i = 0; i < answers.length; i++) {
            var child = answers[i];
            //console.log(child);
            child.className = "MCButton";
        }



        if (label.dataset.correct == "true") {
            // console.log("Correct action");
            if ("feedback" in label.dataset) {
                fb.textContent = jaxify(label.dataset.feedback);
            } else {
                fb.textContent = "Correct!";
            }
            label.classList.add("correctButton");

            fb.className = "Feedback";
            fb.classList.add("correct");

        } else {
            if ("feedback" in label.dataset) {
                fb.textContent = jaxify(label.dataset.feedback);
            } else {
                fb.textContent = "Incorrect -- try again.";
            }
            //console.log("Error action");
            label.classList.add("incorrectButton");
            fb.className = "Feedback";
            fb.classList.add("incorrect");
        }
    }
    else {
        var reset = false;
        var feedback;
         if (label.dataset.correct == "true") {
            if ("feedback" in label.dataset) {
                feedback = jaxify(label.dataset.feedback);
            } else {
                feedback = "Correct!";
            }
            if (label.dataset.answered <= 0) {
                if (fb.dataset.answeredcorrect < 0) {
                    fb.dataset.answeredcorrect = 1;
                    reset = true;
                } else {
                    fb.dataset.answeredcorrect++;
                }
                if (reset) {
                    for (var i = 0; i < answers.length; i++) {
                        var child = answers[i];
                        child.className = "MCButton";
                        child.dataset.answered = 0;
                    }
                }
                label.classList.add("correctButton");
                label.dataset.answered = 1;
                fb.className = "Feedback";
                fb.classList.add("correct");

            }
        } else {
            if ("feedback" in label.dataset) {
                feedback = jaxify(label.dataset.feedback);
            } else {
                feedback = "Incorrect -- try again.";
            }
            if (fb.dataset.answeredcorrect > 0) {
                fb.dataset.answeredcorrect = -1;
                reset = true;
            } else {
                fb.dataset.answeredcorrect--;
            }

            if (reset) {
                for (var i = 0; i < answers.length; i++) {
                    var child = answers[i];
                    child.className = "MCButton";
                    child.dataset.answered = 0;
                }
            }
            label.classList.add("incorrectButton");
            fb.className = "Feedback";
            fb.classList.add("incorrect");
        }
        // What follows is for the saved responses stuff
        var outerContainer = fb.parentElement.parentElement;
        var responsesContainer = document.getElementById("responses" + outerContainer.id);
        if (responsesContainer) {
            //console.log(responsesContainer);
            var response = label.firstChild.innerText;
            if (label.querySelector(".QuizCode")){
                response+= label.querySelector(".QuizCode").firstChild.innerText;
            }
            console.log(response);
            //console.log(document.getElementById("quizWrap"+id));
            var qnum = document.getElementById("quizWrap"+id).dataset.qnum;
            console.log("Question " + qnum);
            //console.log(id, ", got numcorrect=",fb.dataset.numcorrect);
            var responses=JSON.parse(responsesContainer.dataset.responses);
            if (label.dataset.correct == "true") {
                if (typeof(responses[qnum]) == "object"){
                    if (!responses[qnum].includes(response))
                        responses[qnum].push(response);
                } else{
                    responses[qnum]= [ response ];
                }
            } else {
                responses[qnum]= response;
            }
            console.log(responses);
            responsesContainer.setAttribute('data-responses', JSON.stringify(responses));
            printResponses(responsesContainer);
        }
        // End save responses stuff



        var numcorrect = fb.dataset.numcorrect;
        var answeredcorrect = fb.dataset.answeredcorrect;
        if (answeredcorrect >= 0) {
            fb.textContent = feedback + " [" + answeredcorrect + "/" + numcorrect + "]";
        } else {
            fb.textContent = feedback + " [" + 0 + "/" + numcorrect + "]";
        }


    }

    if (typeof MathJax != 'undefined') {
        var version = MathJax.version;
        console.log('MathJax version', version);
        if (version[0] == "2") {
            MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
        } else if (version[0] == "3") {
            MathJax.typeset([fb]);
        }
    } else {
        console.log('MathJax not detected');
    }

}

function make_mc(qa, shuffle_answers, outerqDiv, qDiv, aDiv, id) {
    var shuffled;
    if (shuffle_answers == "True") {
        //console.log(shuffle_answers+" read as true");
        shuffled = getRandomSubarray(qa.answers, qa.answers.length);
    } else {
        //console.log(shuffle_answers+" read as false");
        shuffled = qa.answers;
    }


    var num_correct = 0;



    shuffled.forEach((item, index, ans_array) => {
        //console.log(answer);

        // Make input element
        var inp = document.createElement("input");
        inp.type = "radio";
        inp.id = "quizo" + id + index;
        inp.style = "display:none;";
        aDiv.append(inp);

        //Make label for input element
        var lab = document.createElement("label");
        lab.className = "MCButton";
        lab.id = id + '-' + index;
        lab.onclick = check_mc;
        var aSpan = document.createElement('span');
        aSpan.classsName = "";
        //qDiv.id="quizQn"+id+index;
        if ("answer" in item) {
            aSpan.innerHTML = jaxify(item.answer);
            //aSpan.innerHTML=item.answer;
        }
        lab.append(aSpan);

        // Create div for code inside question
        var codeSpan;
        if ("code" in item) {
            codeSpan = document.createElement('span');
            codeSpan.id = "code" + id + index;
            codeSpan.className = "QuizCode";
            var codePre = document.createElement('pre');
            codeSpan.append(codePre);
            var codeCode = document.createElement('code');
            codePre.append(codeCode);
            codeCode.innerHTML = item.code;
            lab.append(codeSpan);
            //console.log(codeSpan);
        }

        //lab.textContent=item.answer;

        // Set the data attributes for the answer
        lab.setAttribute('data-correct', item.correct);
        if (item.correct) {
            num_correct++;
        }
        if ("feedback" in item) {
            lab.setAttribute('data-feedback', item.feedback);
        }
        lab.setAttribute('data-answered', 0);

        aDiv.append(lab);

    });

    if (num_correct > 1) {
        outerqDiv.className = "ManyChoiceQn";
    } else {
        outerqDiv.className = "MultipleChoiceQn";
    }

    return num_correct;

}
function check_numeric(ths, event) {

    if (event.keyCode === 13) {
        ths.blur();

        var id = ths.id.split('-')[0];

        var submission = ths.value;
        if (submission.indexOf('/') != -1) {
            var sub_parts = submission.split('/');
            //console.log(sub_parts);
            submission = sub_parts[0] / sub_parts[1];
        }
        //console.log("Reader entered", submission);

        if ("precision" in ths.dataset) {
            var precision = ths.dataset.precision;
            // console.log("1:", submission)
            submission = Math.round((1 * submission + Number.EPSILON) * 10 ** precision) / 10 ** precision;
            // console.log("Rounded to ", submission, " precision=", precision  );
        }


        //console.log("In check_numeric(), id="+id);
        //console.log(event.srcElement.id)           
        //console.log(event.srcElement.dataset.feedback)

        var fb = document.getElementById("fb" + id);
        fb.style.display = "none";
        fb.textContent = "Incorrect -- try again.";

        var answers = JSON.parse(ths.dataset.answers);
        //console.log(answers);

        var defaultFB = "";
        var correct;
        var done = false;
        answers.every(answer => {
            //console.log(answer.type);

            correct = false;
            // if (answer.type=="value"){
            if ('value' in answer) {
                if (submission == answer.value) {
                    fb.textContent = jaxify(answer.feedback);
                    correct = answer.correct;
                    //console.log(answer.correct);
                    done = true;
                }
                // } else if (answer.type=="range") {
            } else if ('range' in answer) {
                //console.log(answer.range);
                if ((submission >= answer.range[0]) && (submission < answer.range[1])) {
                    fb.textContent = jaxify(answer.feedback);
                    correct = answer.correct;
                    //console.log(answer.correct);
                    done = true;
                }
            } else if (answer.type == "default") {
                defaultFB = answer.feedback;
            }
            if (done) {
                return false; // Break out of loop if this has been marked correct
            } else {
                return true; // Keep looking for case that includes this as a correct answer
            }
        });

        if ((!done) && (defaultFB != "")) {
            fb.innerHTML = jaxify(defaultFB);
            //console.log("Default feedback", defaultFB);
        }

        fb.style.display = "block";
        if (correct) {
            ths.className = "Input-text";
            ths.classList.add("correctButton");
            fb.className = "Feedback";
            fb.classList.add("correct");
        } else {
            ths.className = "Input-text";
            ths.classList.add("incorrectButton");
            fb.className = "Feedback";
            fb.classList.add("incorrect");
        }

        // What follows is for the saved responses stuff
        var outerContainer = fb.parentElement.parentElement;
        var responsesContainer = document.getElementById("responses" + outerContainer.id);
        if (responsesContainer) {
            console.log(submission);
            var qnum = document.getElementById("quizWrap"+id).dataset.qnum;
            //console.log("Question " + qnum);
            //console.log(id, ", got numcorrect=",fb.dataset.numcorrect);
            var responses=JSON.parse(responsesContainer.dataset.responses);
            console.log(responses);
            if (submission == ths.value){
                responses[qnum]= submission;
            } else {
                responses[qnum]= ths.value + "(" + submission +")";
            }
            responsesContainer.setAttribute('data-responses', JSON.stringify(responses));
            printResponses(responsesContainer);
        }
        // End code to preserve responses

        if (typeof MathJax != 'undefined') {
            var version = MathJax.version;
            console.log('MathJax version', version);
            if (version[0] == "2") {
                MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
            } else if (version[0] == "3") {
                MathJax.typeset([fb]);
            }
        } else {
            console.log('MathJax not detected');
        }
        return false;
    }

}

function isValid(el, charC) {
    //console.log("Input char: ", charC);
    if (charC == 46) {
        if (el.value.indexOf('.') === -1) {
            return true;
        } else if (el.value.indexOf('/') != -1) {
            var parts = el.value.split('/');
            if (parts[1].indexOf('.') === -1) {
                return true;
            }
        }
        else {
            return false;
        }
    } else if (charC == 47) {
        if (el.value.indexOf('/') === -1) {
            if ((el.value != "") && (el.value != ".")) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else if (charC == 45) {
        var edex = el.value.indexOf('e');
        if (edex == -1) {
            edex = el.value.indexOf('E');
        }

        if (el.value == "") {
            return true;
        } else if (edex == (el.value.length - 1)) { // If just after e or E
            return true;
        } else {
            return false;
        }
    } else if (charC == 101) { // "e"
        if ((el.value.indexOf('e') === -1) && (el.value.indexOf('E') === -1) && (el.value.indexOf('/') == -1)) {
            // Prev symbol must be digit or decimal point:
            if (el.value.slice(-1).search(/\d/) >= 0) {
                return true;
            } else if (el.value.slice(-1).search(/\./) >= 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        if (charC > 31 && (charC < 48 || charC > 57))
            return false;
    }
    return true;
}

function numeric_keypress(evnt) {
    var charC = (evnt.which) ? evnt.which : evnt.keyCode;

    if (charC == 13) {
        check_numeric(this, evnt);
    } else {
        return isValid(this, charC);
    }
}





function make_numeric(qa, outerqDiv, qDiv, aDiv, id) {



    //console.log(answer);


    outerqDiv.className = "NumericQn";
    aDiv.style.display = 'block';

    var lab = document.createElement("label");
    lab.className = "InpLabel";
    lab.textContent = "Type numeric answer here:";
    aDiv.append(lab);

    var inp = document.createElement("input");
    inp.type = "text";
    //inp.id="input-"+id;
    inp.id = id + "-0";
    inp.className = "Input-text";
    inp.setAttribute('data-answers', JSON.stringify(qa.answers));
    if ("precision" in qa) {
        inp.setAttribute('data-precision', qa.precision);
    }
    aDiv.append(inp);
    //console.log(inp);

    //inp.addEventListener("keypress", check_numeric);
    //inp.addEventListener("keypress", numeric_keypress);
    /*
    inp.addEventListener("keypress", function(event) {
        return numeric_keypress(this, event);
    }
                        );
                        */
    //inp.onkeypress="return numeric_keypress(this, event)";
    inp.onkeypress = numeric_keypress;
    inp.onpaste = event => false;

    inp.addEventListener("focus", function (event) {
        this.value = "";
        return false;
    }
    );


}
function jaxify(string) {
    var mystring = string;

    var count = 0;
    var loc = mystring.search(/([^\\]|^)(\$)/);

    var count2 = 0;
    var loc2 = mystring.search(/([^\\]|^)(\$\$)/);

    //console.log(loc);

    while ((loc >= 0) || (loc2 >= 0)) {

        /* Have to replace all the double $$ first with current implementation */
        if (loc2 >= 0) {
            if (count2 % 2 == 0) {
                mystring = mystring.replace(/([^\\]|^)(\$\$)/, "$1\\[");
            } else {
                mystring = mystring.replace(/([^\\]|^)(\$\$)/, "$1\\]");
            }
            count2++;
        } else {
            if (count % 2 == 0) {
                mystring = mystring.replace(/([^\\]|^)(\$)/, "$1\\(");
            } else {
                mystring = mystring.replace(/([^\\]|^)(\$)/, "$1\\)");
            }
            count++;
        }
        loc = mystring.search(/([^\\]|^)(\$)/);
        loc2 = mystring.search(/([^\\]|^)(\$\$)/);
        //console.log(mystring,", loc:",loc,", loc2:",loc2);
    }

    //console.log(mystring);
    return mystring;
}


function show_questions(json, mydiv) {
    console.log('show_questions');
    //var mydiv=document.getElementById(myid);
    var shuffle_questions = mydiv.dataset.shufflequestions;
    var num_questions = mydiv.dataset.numquestions;
    var shuffle_answers = mydiv.dataset.shuffleanswers;

    if (num_questions > json.length) {
        num_questions = json.length;
    }

    var questions;
    if ((num_questions < json.length) || (shuffle_questions == "True")) {
        //console.log(num_questions+","+json.length);
        questions = getRandomSubarray(json, num_questions);
    } else {
        questions = json;
    }

    //console.log("SQ: "+shuffle_questions+", NQ: " + num_questions + ", SA: ", shuffle_answers);

    // Iterate over questions
    questions.forEach((qa, index, array) => {
        //console.log(qa.question); 

        var id = makeid(8);
        //console.log(id);


        // Create Div to contain question and answers
        var iDiv = document.createElement('div');
        //iDiv.id = 'quizWrap' + id + index;
        iDiv.id = 'quizWrap' + id;
        iDiv.className = 'Quiz';
        iDiv.setAttribute('data-qnum', index);
        mydiv.appendChild(iDiv);
        // iDiv.innerHTML=qa.question;

        var outerqDiv = document.createElement('div');
        outerqDiv.id = "OuterquizQn" + id + index;

        iDiv.append(outerqDiv);

        // Create div to contain question part
        var qDiv = document.createElement('div');
        qDiv.id = "quizQn" + id + index;
        //qDiv.textContent=qa.question;
        qDiv.innerHTML = jaxify(qa.question);

        outerqDiv.append(qDiv);

        // Create div for code inside question
        var codeDiv;
        if ("code" in qa) {
            codeDiv = document.createElement('div');
            codeDiv.id = "code" + id + index;
            codeDiv.className = "QuizCode";
            var codePre = document.createElement('pre');
            codeDiv.append(codePre);
            var codeCode = document.createElement('code');
            codePre.append(codeCode);
            codeCode.innerHTML = qa.code;
            outerqDiv.append(codeDiv);
            //console.log(codeDiv);
        }


        // Create div to contain answer part
        var aDiv = document.createElement('div');
        aDiv.id = "quizAns" + id + index;
        aDiv.className = 'Answer';
        iDiv.append(aDiv);

        //console.log(qa.type);

        var num_correct;
        if (qa.type == "multiple_choice") {
            num_correct = make_mc(qa, shuffle_answers, outerqDiv, qDiv, aDiv, id);
        } else if (qa.type == "many_choice") {
            num_correct = make_mc(qa, shuffle_answers, outerqDiv, qDiv, aDiv, id);
        } else if (qa.type == "numeric") {
            //console.log("numeric");
            make_numeric(qa, outerqDiv, qDiv, aDiv, id);
        }


        //Make div for feedback
        var fb = document.createElement("div");
        fb.id = "fb" + id;
        //fb.style="font-size: 20px;text-align:center;";
        fb.className = "Feedback";
        fb.setAttribute("data-answeredcorrect", 0);
        fb.setAttribute("data-numcorrect", num_correct);
        iDiv.append(fb);


    });
    var preserveResponses = mydiv.dataset.preserveresponses;
    console.log(preserveResponses);
    console.log(preserveResponses == "true");
    if (preserveResponses == "true") {
        console.log(preserveResponses);
        // Create Div to contain record of answers
        var iDiv = document.createElement('div');
        iDiv.id = 'responses' + mydiv.id;
        iDiv.className = 'JCResponses';
        // Create a place to store responses as an empty array
        iDiv.setAttribute('data-responses', '[]');

        // Dummy Text
        iDiv.innerHTML="<b>Select your answers and then follow the directions that will appear here.</b>"
        //iDiv.className = 'Quiz';
        mydiv.appendChild(iDiv);
    }
//console.log("At end of show_questions");
    if (typeof MathJax != 'undefined') {
        console.log("MathJax version", MathJax.version);
        var version = MathJax.version;
        setTimeout(function(){
            var version = MathJax.version;
            console.log('After sleep, MathJax version', version);
            if (version[0] == "2") {
                MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
            } else if (version[0] == "3") {
                MathJax.typeset([mydiv]);
            }
        }, 500);
if (typeof version == 'undefined') {
        } else
        {
            if (version[0] == "2") {
                MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
            } else if (version[0] == "3") {
                MathJax.typeset([mydiv]);
            } else {
                console.log("MathJax not found");
            }
        }
    }
    return false;
}

        {
        show_questions(questionsqwpylRlMPkOo,  qwpylRlMPkOo);
        }
        </script></div>
</div>
</section>
<section id="question-4">
<h2>Question 4<a class="headerlink" href="#question-4" title="Permalink to this headline">#</a></h2>
<div class="cell tag_remove-input docutils container">
</div>
<div class="cell tag_remove-input docutils container">
<div class="cell_output docutils container">
<div class="output text_html"><div id="OHAqueNMLMcg" data-shufflequestions="False"
               data-shuffleanswers="True"
               data-preserveresponses="false"
               data-numquestions="1000000"> <style>:root {
    --medium-slate-blue: #6f78ffff;
    --orange-pantone: #f75c03ff;
    --russian-violet: #392061ff;
    --maximum-yellow-red: #ffc857ff;
    --viridian-green: #119da4ff;
    --incorrect-red: #c80202;
    --correct-green: #009113;
}

.Quiz {
    max-width: 600px;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 15px;
    padding-bottom: 4px;
    padding-top: 4px;
    line-height: 1.1;
    font-size: 16pt;
}

.QuizCode {
    font-size: 14pt;
    margin-top: 10px;
    margin-left: 20px;
    margin-right: 20px;
}

.QuizCode>pre {
    padding: 4px;
}

.Answer {
    margin: 10px 0;
    display: grid;
    grid-template-columns: auto auto;
    grid-gap: 10px;
}

.Feedback {
    font-size: 16pt;
    text-align: center;
    min-height: 2em;
}

.Input {
    align: left;
    font-size: 20pt;
}

.Input-text {
    display: block;
    margin: 10px;
    color: inherit;
    width: 140px;
    background-color: #c0c0c0;
    color: #fff;
    padding: 5px;
    padding-left: 10px;
    font-family: inherit;
    font-size: 20px;
    font-weight: inherit;
    line-height: 20pt;
    border: none;
    border-radius: 0.2rem;
    transition: box-shadow 0.1s);
}

.Input-text:focus {
    outline: none;
    background-color: #c0c0c0;
    box-shadow: 0.6rem 0.8rem 1.4rem -0.5rem #999999;
}

.MCButton {
    background: #fafafa;
    border: 1px solid #eee;
    border-radius: 10px;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
}

.MCButton p {
    color: inherit;
}

.MultipleChoiceQn {
    padding: 10px;
    background: var(--medium-slate-blue);
    color: #fafafa;
    border-radius: 10px;
}

.ManyChoiceQn {
    padding: 10px;
    background: var(--orange-pantone);
    color: #fafafa;
    border-radius: 10px;
}

.NumericQn {
    padding: 10px;
    background: var(--russian-violet);
    color: #fafafa;
    border-radius: 10px;
}

.NumericQn p {
    color: inherit;
}

.InpLabel {
    line-height: 34px;
    float: left;
    margin-right: 10px;
    color: #101010;
    font-size: 15pt;
}

.incorrect {
    color: var(--incorrect-red);
}

.correct {
    color: var(--correct-green);
}

.correctButton {
    /*
    background: var(--correct-green);
   */
    animation: correct-anim 0.6s ease;
    animation-fill-mode: forwards;
    color: #fafafa;
    box-shadow: inset 0px 0px 5px #555555;
    outline: none;
}

.incorrectButton {
    animation: incorrect-anim 0.8s ease;
    animation-fill-mode: forwards;
    color: #fafafa;
    box-shadow: inset 0px 0px 5px #555555;
    outline: none;
}

@keyframes incorrect-anim {
    100% {
        background-color: var(--incorrect-red);
    }
}

@keyframes correct-anim {
    100% {
        background-color: var(--correct-green);
    }
}</style></div><script type="application/javascript">var questionsOHAqueNMLMcg=[{"question": "Determine the output of the following Python code:", "code": "a=\"1\"\nb=\"2\"\nprint(a+b)", "type": "multiple_choice", "answers": [{"answer": "1", "correct": false, "feedback": "No. When strings are operated on by +, they are concatenated."}, {"answer": "2", "correct": false, "feedback": "No. When strings are operated on by +, they are concatenated."}, {"answer": "3", "correct": false, "feedback": "No. When strings are operated on by +, they are concatenated."}, {"answer": "12", "correct": true, "feedback": "Yes. The + operator will concatenate the strings \"1\" and \"2\"."}, {"answer": "error", "correct": false, "feedback": "No. The + operator for strings performs string concatenation."}]}];
    // Make a random ID
function makeid(length) {
    var result = [];
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result.push(characters.charAt(Math.floor(Math.random() * charactersLength)));
    }
    return result.join('');
}

// Choose a random subset of an array. Can also be used to shuffle the array
function getRandomSubarray(arr, size) {
    var shuffled = arr.slice(0), i = arr.length, temp, index;
    while (i--) {
        index = Math.floor((i + 1) * Math.random());
        temp = shuffled[index];
        shuffled[index] = shuffled[i];
        shuffled[i] = temp;
    }
    return shuffled.slice(0, size);
}

function printResponses(responsesContainer) {
    var responses=JSON.parse(responsesContainer.dataset.responses);
    var stringResponses='<B>IMPORTANT!</B>To preserve this answer sequence for submission, when you have finalized your answers: <ol> <li> Copy the text in this cell below "Answer String"</li> <li> Double click on the cell directly below the Answer String, labeled "Replace Me"</li> <li> Select the whole "Replace Me" text</li> <li> Paste in your answer string and press shift-Enter.</li><li>Save the notebook using the save icon or File->Save Notebook menu item</li></ul><br><br><br><b>Answer String:</b><br> ';
    console.log(responses);
    responses.forEach((response, index) => {
        if (response) {
            console.log(index + ': ' + response);
            stringResponses+= index + ': ' + response +"<BR>";
        }
    });
    responsesContainer.innerHTML=stringResponses;
}
function check_mc() {
    var id = this.id.split('-')[0];
    //var response = this.id.split('-')[1];
    //console.log(response);
    //console.log("In check_mc(), id="+id);
    //console.log(event.srcElement.id)           
    //console.log(event.srcElement.dataset.correct)   
    //console.log(event.srcElement.dataset.feedback)

    var label = event.srcElement;
    //console.log(label, label.nodeName);
    var depth = 0;
    while ((label.nodeName != "LABEL") && (depth < 20)) {
        label = label.parentElement;
        console.log(depth, label);
        depth++;
    }



    var answers = label.parentElement.children;

    //console.log(answers);


    // Split behavior based on multiple choice vs many choice:
    var fb = document.getElementById("fb" + id);




    if (fb.dataset.numcorrect == 1) {
        // What follows is for the saved responses stuff
        var outerContainer = fb.parentElement.parentElement;
        var responsesContainer = document.getElementById("responses" + outerContainer.id);
        if (responsesContainer) {
            //console.log(responsesContainer);
            var response = label.firstChild.innerText;
            if (label.querySelector(".QuizCode")){
                response+= label.querySelector(".QuizCode").firstChild.innerText;
            }
            console.log(response);
            //console.log(document.getElementById("quizWrap"+id));
            var qnum = document.getElementById("quizWrap"+id).dataset.qnum;
            console.log("Question " + qnum);
            //console.log(id, ", got numcorrect=",fb.dataset.numcorrect);
            var responses=JSON.parse(responsesContainer.dataset.responses);
            console.log(responses);
            responses[qnum]= response;
            responsesContainer.setAttribute('data-responses', JSON.stringify(responses));
            printResponses(responsesContainer);
        }
        // End code to preserve responses
        
        for (var i = 0; i < answers.length; i++) {
            var child = answers[i];
            //console.log(child);
            child.className = "MCButton";
        }



        if (label.dataset.correct == "true") {
            // console.log("Correct action");
            if ("feedback" in label.dataset) {
                fb.textContent = jaxify(label.dataset.feedback);
            } else {
                fb.textContent = "Correct!";
            }
            label.classList.add("correctButton");

            fb.className = "Feedback";
            fb.classList.add("correct");

        } else {
            if ("feedback" in label.dataset) {
                fb.textContent = jaxify(label.dataset.feedback);
            } else {
                fb.textContent = "Incorrect -- try again.";
            }
            //console.log("Error action");
            label.classList.add("incorrectButton");
            fb.className = "Feedback";
            fb.classList.add("incorrect");
        }
    }
    else {
        var reset = false;
        var feedback;
         if (label.dataset.correct == "true") {
            if ("feedback" in label.dataset) {
                feedback = jaxify(label.dataset.feedback);
            } else {
                feedback = "Correct!";
            }
            if (label.dataset.answered <= 0) {
                if (fb.dataset.answeredcorrect < 0) {
                    fb.dataset.answeredcorrect = 1;
                    reset = true;
                } else {
                    fb.dataset.answeredcorrect++;
                }
                if (reset) {
                    for (var i = 0; i < answers.length; i++) {
                        var child = answers[i];
                        child.className = "MCButton";
                        child.dataset.answered = 0;
                    }
                }
                label.classList.add("correctButton");
                label.dataset.answered = 1;
                fb.className = "Feedback";
                fb.classList.add("correct");

            }
        } else {
            if ("feedback" in label.dataset) {
                feedback = jaxify(label.dataset.feedback);
            } else {
                feedback = "Incorrect -- try again.";
            }
            if (fb.dataset.answeredcorrect > 0) {
                fb.dataset.answeredcorrect = -1;
                reset = true;
            } else {
                fb.dataset.answeredcorrect--;
            }

            if (reset) {
                for (var i = 0; i < answers.length; i++) {
                    var child = answers[i];
                    child.className = "MCButton";
                    child.dataset.answered = 0;
                }
            }
            label.classList.add("incorrectButton");
            fb.className = "Feedback";
            fb.classList.add("incorrect");
        }
        // What follows is for the saved responses stuff
        var outerContainer = fb.parentElement.parentElement;
        var responsesContainer = document.getElementById("responses" + outerContainer.id);
        if (responsesContainer) {
            //console.log(responsesContainer);
            var response = label.firstChild.innerText;
            if (label.querySelector(".QuizCode")){
                response+= label.querySelector(".QuizCode").firstChild.innerText;
            }
            console.log(response);
            //console.log(document.getElementById("quizWrap"+id));
            var qnum = document.getElementById("quizWrap"+id).dataset.qnum;
            console.log("Question " + qnum);
            //console.log(id, ", got numcorrect=",fb.dataset.numcorrect);
            var responses=JSON.parse(responsesContainer.dataset.responses);
            if (label.dataset.correct == "true") {
                if (typeof(responses[qnum]) == "object"){
                    if (!responses[qnum].includes(response))
                        responses[qnum].push(response);
                } else{
                    responses[qnum]= [ response ];
                }
            } else {
                responses[qnum]= response;
            }
            console.log(responses);
            responsesContainer.setAttribute('data-responses', JSON.stringify(responses));
            printResponses(responsesContainer);
        }
        // End save responses stuff



        var numcorrect = fb.dataset.numcorrect;
        var answeredcorrect = fb.dataset.answeredcorrect;
        if (answeredcorrect >= 0) {
            fb.textContent = feedback + " [" + answeredcorrect + "/" + numcorrect + "]";
        } else {
            fb.textContent = feedback + " [" + 0 + "/" + numcorrect + "]";
        }


    }

    if (typeof MathJax != 'undefined') {
        var version = MathJax.version;
        console.log('MathJax version', version);
        if (version[0] == "2") {
            MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
        } else if (version[0] == "3") {
            MathJax.typeset([fb]);
        }
    } else {
        console.log('MathJax not detected');
    }

}

function make_mc(qa, shuffle_answers, outerqDiv, qDiv, aDiv, id) {
    var shuffled;
    if (shuffle_answers == "True") {
        //console.log(shuffle_answers+" read as true");
        shuffled = getRandomSubarray(qa.answers, qa.answers.length);
    } else {
        //console.log(shuffle_answers+" read as false");
        shuffled = qa.answers;
    }


    var num_correct = 0;



    shuffled.forEach((item, index, ans_array) => {
        //console.log(answer);

        // Make input element
        var inp = document.createElement("input");
        inp.type = "radio";
        inp.id = "quizo" + id + index;
        inp.style = "display:none;";
        aDiv.append(inp);

        //Make label for input element
        var lab = document.createElement("label");
        lab.className = "MCButton";
        lab.id = id + '-' + index;
        lab.onclick = check_mc;
        var aSpan = document.createElement('span');
        aSpan.classsName = "";
        //qDiv.id="quizQn"+id+index;
        if ("answer" in item) {
            aSpan.innerHTML = jaxify(item.answer);
            //aSpan.innerHTML=item.answer;
        }
        lab.append(aSpan);

        // Create div for code inside question
        var codeSpan;
        if ("code" in item) {
            codeSpan = document.createElement('span');
            codeSpan.id = "code" + id + index;
            codeSpan.className = "QuizCode";
            var codePre = document.createElement('pre');
            codeSpan.append(codePre);
            var codeCode = document.createElement('code');
            codePre.append(codeCode);
            codeCode.innerHTML = item.code;
            lab.append(codeSpan);
            //console.log(codeSpan);
        }

        //lab.textContent=item.answer;

        // Set the data attributes for the answer
        lab.setAttribute('data-correct', item.correct);
        if (item.correct) {
            num_correct++;
        }
        if ("feedback" in item) {
            lab.setAttribute('data-feedback', item.feedback);
        }
        lab.setAttribute('data-answered', 0);

        aDiv.append(lab);

    });

    if (num_correct > 1) {
        outerqDiv.className = "ManyChoiceQn";
    } else {
        outerqDiv.className = "MultipleChoiceQn";
    }

    return num_correct;

}
function check_numeric(ths, event) {

    if (event.keyCode === 13) {
        ths.blur();

        var id = ths.id.split('-')[0];

        var submission = ths.value;
        if (submission.indexOf('/') != -1) {
            var sub_parts = submission.split('/');
            //console.log(sub_parts);
            submission = sub_parts[0] / sub_parts[1];
        }
        //console.log("Reader entered", submission);

        if ("precision" in ths.dataset) {
            var precision = ths.dataset.precision;
            // console.log("1:", submission)
            submission = Math.round((1 * submission + Number.EPSILON) * 10 ** precision) / 10 ** precision;
            // console.log("Rounded to ", submission, " precision=", precision  );
        }


        //console.log("In check_numeric(), id="+id);
        //console.log(event.srcElement.id)           
        //console.log(event.srcElement.dataset.feedback)

        var fb = document.getElementById("fb" + id);
        fb.style.display = "none";
        fb.textContent = "Incorrect -- try again.";

        var answers = JSON.parse(ths.dataset.answers);
        //console.log(answers);

        var defaultFB = "";
        var correct;
        var done = false;
        answers.every(answer => {
            //console.log(answer.type);

            correct = false;
            // if (answer.type=="value"){
            if ('value' in answer) {
                if (submission == answer.value) {
                    fb.textContent = jaxify(answer.feedback);
                    correct = answer.correct;
                    //console.log(answer.correct);
                    done = true;
                }
                // } else if (answer.type=="range") {
            } else if ('range' in answer) {
                //console.log(answer.range);
                if ((submission >= answer.range[0]) && (submission < answer.range[1])) {
                    fb.textContent = jaxify(answer.feedback);
                    correct = answer.correct;
                    //console.log(answer.correct);
                    done = true;
                }
            } else if (answer.type == "default") {
                defaultFB = answer.feedback;
            }
            if (done) {
                return false; // Break out of loop if this has been marked correct
            } else {
                return true; // Keep looking for case that includes this as a correct answer
            }
        });

        if ((!done) && (defaultFB != "")) {
            fb.innerHTML = jaxify(defaultFB);
            //console.log("Default feedback", defaultFB);
        }

        fb.style.display = "block";
        if (correct) {
            ths.className = "Input-text";
            ths.classList.add("correctButton");
            fb.className = "Feedback";
            fb.classList.add("correct");
        } else {
            ths.className = "Input-text";
            ths.classList.add("incorrectButton");
            fb.className = "Feedback";
            fb.classList.add("incorrect");
        }

        // What follows is for the saved responses stuff
        var outerContainer = fb.parentElement.parentElement;
        var responsesContainer = document.getElementById("responses" + outerContainer.id);
        if (responsesContainer) {
            console.log(submission);
            var qnum = document.getElementById("quizWrap"+id).dataset.qnum;
            //console.log("Question " + qnum);
            //console.log(id, ", got numcorrect=",fb.dataset.numcorrect);
            var responses=JSON.parse(responsesContainer.dataset.responses);
            console.log(responses);
            if (submission == ths.value){
                responses[qnum]= submission;
            } else {
                responses[qnum]= ths.value + "(" + submission +")";
            }
            responsesContainer.setAttribute('data-responses', JSON.stringify(responses));
            printResponses(responsesContainer);
        }
        // End code to preserve responses

        if (typeof MathJax != 'undefined') {
            var version = MathJax.version;
            console.log('MathJax version', version);
            if (version[0] == "2") {
                MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
            } else if (version[0] == "3") {
                MathJax.typeset([fb]);
            }
        } else {
            console.log('MathJax not detected');
        }
        return false;
    }

}

function isValid(el, charC) {
    //console.log("Input char: ", charC);
    if (charC == 46) {
        if (el.value.indexOf('.') === -1) {
            return true;
        } else if (el.value.indexOf('/') != -1) {
            var parts = el.value.split('/');
            if (parts[1].indexOf('.') === -1) {
                return true;
            }
        }
        else {
            return false;
        }
    } else if (charC == 47) {
        if (el.value.indexOf('/') === -1) {
            if ((el.value != "") && (el.value != ".")) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else if (charC == 45) {
        var edex = el.value.indexOf('e');
        if (edex == -1) {
            edex = el.value.indexOf('E');
        }

        if (el.value == "") {
            return true;
        } else if (edex == (el.value.length - 1)) { // If just after e or E
            return true;
        } else {
            return false;
        }
    } else if (charC == 101) { // "e"
        if ((el.value.indexOf('e') === -1) && (el.value.indexOf('E') === -1) && (el.value.indexOf('/') == -1)) {
            // Prev symbol must be digit or decimal point:
            if (el.value.slice(-1).search(/\d/) >= 0) {
                return true;
            } else if (el.value.slice(-1).search(/\./) >= 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        if (charC > 31 && (charC < 48 || charC > 57))
            return false;
    }
    return true;
}

function numeric_keypress(evnt) {
    var charC = (evnt.which) ? evnt.which : evnt.keyCode;

    if (charC == 13) {
        check_numeric(this, evnt);
    } else {
        return isValid(this, charC);
    }
}





function make_numeric(qa, outerqDiv, qDiv, aDiv, id) {



    //console.log(answer);


    outerqDiv.className = "NumericQn";
    aDiv.style.display = 'block';

    var lab = document.createElement("label");
    lab.className = "InpLabel";
    lab.textContent = "Type numeric answer here:";
    aDiv.append(lab);

    var inp = document.createElement("input");
    inp.type = "text";
    //inp.id="input-"+id;
    inp.id = id + "-0";
    inp.className = "Input-text";
    inp.setAttribute('data-answers', JSON.stringify(qa.answers));
    if ("precision" in qa) {
        inp.setAttribute('data-precision', qa.precision);
    }
    aDiv.append(inp);
    //console.log(inp);

    //inp.addEventListener("keypress", check_numeric);
    //inp.addEventListener("keypress", numeric_keypress);
    /*
    inp.addEventListener("keypress", function(event) {
        return numeric_keypress(this, event);
    }
                        );
                        */
    //inp.onkeypress="return numeric_keypress(this, event)";
    inp.onkeypress = numeric_keypress;
    inp.onpaste = event => false;

    inp.addEventListener("focus", function (event) {
        this.value = "";
        return false;
    }
    );


}
function jaxify(string) {
    var mystring = string;

    var count = 0;
    var loc = mystring.search(/([^\\]|^)(\$)/);

    var count2 = 0;
    var loc2 = mystring.search(/([^\\]|^)(\$\$)/);

    //console.log(loc);

    while ((loc >= 0) || (loc2 >= 0)) {

        /* Have to replace all the double $$ first with current implementation */
        if (loc2 >= 0) {
            if (count2 % 2 == 0) {
                mystring = mystring.replace(/([^\\]|^)(\$\$)/, "$1\\[");
            } else {
                mystring = mystring.replace(/([^\\]|^)(\$\$)/, "$1\\]");
            }
            count2++;
        } else {
            if (count % 2 == 0) {
                mystring = mystring.replace(/([^\\]|^)(\$)/, "$1\\(");
            } else {
                mystring = mystring.replace(/([^\\]|^)(\$)/, "$1\\)");
            }
            count++;
        }
        loc = mystring.search(/([^\\]|^)(\$)/);
        loc2 = mystring.search(/([^\\]|^)(\$\$)/);
        //console.log(mystring,", loc:",loc,", loc2:",loc2);
    }

    //console.log(mystring);
    return mystring;
}


function show_questions(json, mydiv) {
    console.log('show_questions');
    //var mydiv=document.getElementById(myid);
    var shuffle_questions = mydiv.dataset.shufflequestions;
    var num_questions = mydiv.dataset.numquestions;
    var shuffle_answers = mydiv.dataset.shuffleanswers;

    if (num_questions > json.length) {
        num_questions = json.length;
    }

    var questions;
    if ((num_questions < json.length) || (shuffle_questions == "True")) {
        //console.log(num_questions+","+json.length);
        questions = getRandomSubarray(json, num_questions);
    } else {
        questions = json;
    }

    //console.log("SQ: "+shuffle_questions+", NQ: " + num_questions + ", SA: ", shuffle_answers);

    // Iterate over questions
    questions.forEach((qa, index, array) => {
        //console.log(qa.question); 

        var id = makeid(8);
        //console.log(id);


        // Create Div to contain question and answers
        var iDiv = document.createElement('div');
        //iDiv.id = 'quizWrap' + id + index;
        iDiv.id = 'quizWrap' + id;
        iDiv.className = 'Quiz';
        iDiv.setAttribute('data-qnum', index);
        mydiv.appendChild(iDiv);
        // iDiv.innerHTML=qa.question;

        var outerqDiv = document.createElement('div');
        outerqDiv.id = "OuterquizQn" + id + index;

        iDiv.append(outerqDiv);

        // Create div to contain question part
        var qDiv = document.createElement('div');
        qDiv.id = "quizQn" + id + index;
        //qDiv.textContent=qa.question;
        qDiv.innerHTML = jaxify(qa.question);

        outerqDiv.append(qDiv);

        // Create div for code inside question
        var codeDiv;
        if ("code" in qa) {
            codeDiv = document.createElement('div');
            codeDiv.id = "code" + id + index;
            codeDiv.className = "QuizCode";
            var codePre = document.createElement('pre');
            codeDiv.append(codePre);
            var codeCode = document.createElement('code');
            codePre.append(codeCode);
            codeCode.innerHTML = qa.code;
            outerqDiv.append(codeDiv);
            //console.log(codeDiv);
        }


        // Create div to contain answer part
        var aDiv = document.createElement('div');
        aDiv.id = "quizAns" + id + index;
        aDiv.className = 'Answer';
        iDiv.append(aDiv);

        //console.log(qa.type);

        var num_correct;
        if (qa.type == "multiple_choice") {
            num_correct = make_mc(qa, shuffle_answers, outerqDiv, qDiv, aDiv, id);
        } else if (qa.type == "many_choice") {
            num_correct = make_mc(qa, shuffle_answers, outerqDiv, qDiv, aDiv, id);
        } else if (qa.type == "numeric") {
            //console.log("numeric");
            make_numeric(qa, outerqDiv, qDiv, aDiv, id);
        }


        //Make div for feedback
        var fb = document.createElement("div");
        fb.id = "fb" + id;
        //fb.style="font-size: 20px;text-align:center;";
        fb.className = "Feedback";
        fb.setAttribute("data-answeredcorrect", 0);
        fb.setAttribute("data-numcorrect", num_correct);
        iDiv.append(fb);


    });
    var preserveResponses = mydiv.dataset.preserveresponses;
    console.log(preserveResponses);
    console.log(preserveResponses == "true");
    if (preserveResponses == "true") {
        console.log(preserveResponses);
        // Create Div to contain record of answers
        var iDiv = document.createElement('div');
        iDiv.id = 'responses' + mydiv.id;
        iDiv.className = 'JCResponses';
        // Create a place to store responses as an empty array
        iDiv.setAttribute('data-responses', '[]');

        // Dummy Text
        iDiv.innerHTML="<b>Select your answers and then follow the directions that will appear here.</b>"
        //iDiv.className = 'Quiz';
        mydiv.appendChild(iDiv);
    }
//console.log("At end of show_questions");
    if (typeof MathJax != 'undefined') {
        console.log("MathJax version", MathJax.version);
        var version = MathJax.version;
        setTimeout(function(){
            var version = MathJax.version;
            console.log('After sleep, MathJax version', version);
            if (version[0] == "2") {
                MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
            } else if (version[0] == "3") {
                MathJax.typeset([mydiv]);
            }
        }, 500);
if (typeof version == 'undefined') {
        } else
        {
            if (version[0] == "2") {
                MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
            } else if (version[0] == "3") {
                MathJax.typeset([mydiv]);
            } else {
                console.log("MathJax not found");
            }
        }
    }
    return false;
}

        {
        show_questions(questionsOHAqueNMLMcg,  OHAqueNMLMcg);
        }
        </script></div>
</div>
</section>
</section>

    <script type="text/x-thebe-config">
    {
        requestKernel: true,
        binderOptions: {
            repo: "binder-examples/jupyter-stacks-datascience",
            ref: "master",
        },
        codeMirrorConfig: {
            theme: "abcdef",
            mode: "python"
        },
        kernelOptions: {
            kernelName: "python3",
            path: "./."
        },
        predefinedOutput: true
    }
    </script>
    <script>kernelName = 'python3'</script>

              </div>
              
            </main>
            <footer class="footer-article noprint">
                
    <!-- Previous / next buttons -->
<div class='prev-next-area'>
    <a class='left-prev' id="prev-link" href="classroom-manager.php" title="previous page">
        <i class="fas fa-angle-left"></i>
        <div class="prev-next-info">
            <p class="prev-next-subtitle">previous</p>
            <p class="prev-next-title">PART A: EFFECTIVE CLASSROOM MANAGEMENT</p>
        </div>
    </a>
</div>
            </footer>
        </div>
    </div>
    <div class="footer-content row">
        <footer class="col footer"><p>
  
    By Coetzee SA, Van Niekerk EH (Editors)<br/>
  
      &copy; Copyright 2019-Present.<br/>
</p>
        </footer>
    </div>
    
</div>


      </div>
    </div>
  
  <!-- Scripts loaded after <body> so the DOM is not blocked -->
  <script src="_static/scripts/pydata-sphinx-theme.js?digest=1999514e3f237ded88cf"></script>


  </body>
</html>