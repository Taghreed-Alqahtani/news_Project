<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Landing page</title>
    <link rel="stylesheet" type='text/css' href="{{ asset('css/form.css') }}">

    <style>
        @import url("https://rsms.me/inter/inter.css");

        html {
            font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
                "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
                "Noto Color Emoji";
        }
        .bold{
            font-weight: bold;
        }

        .mr-t {
            margin-top: 300px !important;
        }

        

        .dropbtn {
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgba(131, 130, 130, 0.9);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: rgba(85, 89, 92, 0.3);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        @import 'https://fonts.googleapis.com/css?family=Raleway';

        html,
        body {
            margin: 0px;
        }

        div.borderYtoX a:before,
        div.borderYtoX a:after {
            position: absolute;
            opacity: 0.5;
            height: 100%;
            width: 2px;
            content: '';
            background: #FFF;
            transition: all 0.3s;
        }

        div.borderYtoX a:before {
            left: 0px;
            top: 0px;
        }

        div.borderYtoX a:after {
            right: 0px;
            bottom: 0px;
        }

        div.borderYtoX a:hover:before,
        div.borderYtoX a:hover:after {
            opacity: 1;
            height: 2px;
            width: 100%;
        }

        .teal {
            background: #8f8f8f;
        }

        div.nav-container {
            font-family: Raleway;
            margin: 0;
            padding: 2em 3em;
            text-align: center;
            z-index: 1;
        }

        div.nav-container a {
            color: #FFF;
            text-decoration: none;
            font: 20px Raleway;
            margin: 0px 10px;
            padding: 10px 10px;
            position: relative;
            z-index: 0;
            cursor: pointer;
        }
        .news-section{
            padding-top: 80px;
        }
        /* here */
        a:hover {
  text-decoration: underline;
}

/* Hero Unit ----------------------*/
.hero-unit {
  height: 640px;
  background: url(https://static.pexels.com/photos/2884/building-vintage-bike-monument.jpg) no-repeat center center;
  background-size: cover;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
}
.hero-unit h1,
.hero-unit h2,
.hero-unit h3,
.hero-unit h4,
.hero-unit h5,
.hero-unit h6 {
  margin-top: -0.5rem;
  margin-bottom: 0;
  color: white;
}
.hero-unit h1 {
  font-weight: bold;
}
.hero-unit hgroup {
  margin: 3rem 0;
}
.hero-unit .card-icon { /* front of card */
  display: block;
  margin: 0.5rem auto 0;
  font-size: 2rem;
  color: white;
}
.hero-unit .clients {
  margin: 2rem auto;
}
.hero-unit .clients a {
  color: white;
}
.clients .fa-stack-2x {
  color: gray;
}
.clients:hover .fa-stack-2x {
  color: #333333;
}

/* Card design - front */
.button.large {
  margin: 0;
  padding: 3.25rem;
}
.button.large a {
  color: white;
  font-size: 1.75rem;
  font-weight: 100;
  margin-top: 2rem;
}

/* Card design - back */
.panel i {
  font-size: 2rem;
  display: block;
  float: left;
  width: 20%;
  opacity: 0.5;
}
.panel a, 
.panel p, 
.panel small {
  width: 80%;
  float: right;
}
.panel a {
  margin-bottom: 0.5rem;
}
.panel a:hover {
  text-decoration: underline;
}
.panel small {
  margin-top: -0.5rem;
  font-style: italic;
}

/* Buttons Card Flipper 
 * Source: https://cssdeck.com/labs/rxcleo5w
 */
.flip-cards {
  float: left;
  width: 100%;
  height: 100%;
  padding-left: 1rem;
}

.flip-cards li {
  float: left;
  width: 33.3%;
  height: 180px;
  position: relative;
  padding: 0;
}

.flip-cards li:hover {
  cursor: pointer;
}

.flip-cards li:hover .card-front {
  -webkit-transform: rotateY(180deg);
  -moz-transform: rotateY(180deg);
  -ms-transform: rotateY(180deg);
  -o-transform: rotateY(180deg);
  transform: rotateY(180deg);
  -webkit-transform: perspective(1000) rotateY(180deg);
  -moz-transform: perspective(1000) rotateY(180deg);
  -ms-transform: perspective(1000) rotateY(180deg);
  -o-transform: perspective(1000) rotateY(180deg);
  transform: perspective(1000) rotateY(180deg);
}

.flip-cards li:hover .card-back {
  z-index: 950;
  -webkit-transform: rotateY(0deg);
  -moz-transform: rotateY(0deg);
  -ms-transform: rotateY(0deg);
  -o-transform: rotateY(0deg);
  transform: rotateY(0deg);
  -webkit-transform: perspective(1000) rotateY(0deg);
  -moz-transform: perspective(1000) rotateY(0deg);
  -ms-transform: perspective(1000) rotateY(0deg);
  -o-transform: perspective(1000) rotateY(0deg);
  transform: perspective(1000) rotateY(0deg);
}

.flip-cards .card-front,
.flip-cards .card-back {
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.6s;
  -moz-transition: -moz-transform 0.6s;
  -o-transition: -o-transform 0.6s;
  transition: transform 0.6s;
  display: block;
  height: 100%;
  position: absolute;
  width: 100%;
}

.flip-cards .card-front {
  -webkit-transform: perspective(1000) rotateY(0);
  -moz-transform: perspective(1000) rotateY(0);
  -ms-transform: perspective(1000) rotateY(0);
  -o-transform: perspective(1000) rotateY(0);
  transform: perspective(1000) rotateY(0);
  z-index: 900;
}

.flip-cards .card-back {
  -webkit-transform: rotateY(-180deg);
  -moz-transform: rotateY(-180deg);
  -ms-transform: rotateY(-180deg);
  -o-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
  z-index: 800;
}

/* Button Card Colors */
.flip-cards .panel {
  border: none;
}

.flip-cards .panel i,
.flip-cards .panel p,
.flip-cards .panel a,
.flip-cards .panel small {
  color: white;
}

/* First button color */
.flip-cards li:first-child > .button {
  background-color: rgba(40, 57, 77, 0.8);
}
.flip-cards li:first-child > .panel {
  background-color: rgba(40, 57, 77, 1);
}

/* Second button color */
.flip-cards li:nth-child(2) > .button {
  background-color: rgba(109, 193, 202, 0.8);
}
.flip-cards li:nth-child(2) > .panel {
  background-color: rgba(109, 193, 202, 1);
}

/* Third button color */
.flip-cards li:nth-child(3) > .button {
  background-color: rgba(211, 81, 45, 0.8);
}
.flip-cards li:nth-child(3) > .panel {
  background-color: rgba(211, 81, 45, 1);
}

/* Fourth button color */
.flip-cards li:nth-child(4) > .button {
  background-color: rgba(235, 167, 36, 0.8);
}
.flip-cards li:nth-child(4) > .panel {
  background-color: rgba(235, 167, 36, 1);
}

/* Fifth button color */
.flip-cards li:nth-child(5) > .button {
  background-color: rgba(75, 135, 150, 0.8);
}
.flip-cards li:nth-child(5) > .panel {
  background-color: rgba(75, 135, 150, 1);
}

/* Sixth (last) button color */
.flip-cards li:last-child > .button {
  background-color: rgba(100, 66, 87, 0.8);
}
.flip-cards li:last-child > .panel {
  background-color: rgba(100, 66, 87, 1);
  color: white;
}

/*
 * RESPONSIVENESS -------------------------------------------------
 */
@media only screen and ( max-width: 40em ) {
	.hero-unit {
		height: 800px;
	}
	.flip-cards li {
		width: 50%;
		/*height: 160px;*/
	}
}
@media only screen and ( max-width: 30em ) {
	.hero-unit h1 {
		font-size: 1.75rem;
	}
	.hero-unit h3 {
		font-size: 1.125rem;
	}
}
@media only screen and ( max-width: 25em ) {
	.hero-unit {
		height: 920px;
	}
	.hero-unit hgroup {
		margin: 2rem 0;
	}
	.hero-unit h1 {
		font-size: 1.35rem;
		padding-bottom: 0.25rem;
	}
	.hero-unit h3 {
		font-size: 0.85rem;
	}
	.hero-unit .card-icon {
		font-size: 1.35rem;
	}
	.hero-unit .card-back .card-icon {
		font-size: 2rem;
		margin: 0;
		padding: 5px 0 20px 5px;
	}
	.flip-cards li {
		width: 100%;
		font-size: 1.35rem;
		height: 120px;
	}
	.flip-cards .panel p {
		display: none;	
	}
	.flip-cards .panel small {
		margin: 0;
	}
	.button.large {
		padding: 2rem;
	}
	.button.large a {
		font-size: 1.35rem;
	}
}

    
    </style>
</head>
