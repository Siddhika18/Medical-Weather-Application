<?php header("Content-type: text/css"); ?>

html {
    background: #199;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-size: 120% ;
    font-family: 'Open Sans', sans-serif;
}

h1.temp{
    margin:0;
    margin-bottom: 0.4em;
}
.description {
    text-transform: capitalize;
    margin-left: 5px;
}
.flex{
    display: flex;
    align-items: center;

}
.card {
    background: #000000d0;
    color:white;
    padding: 2em;
    border-radius: 30px;
    width: 100%;
    max-width: 420px;
    margin:1em;
}

.search{
    display:flex;
    align-items:center;
    justify-content:center;
}

button {
    margin: 0.5em;
    border-radius: 50%;
    border: none;
    height: 46px;
    width: 46px;
    outline: none;
    background: #7c7c7c2b;
    color: white;
    cursor: pointer;
    transition: 0.2s ease-in-out;
}

input.search-bar {
    border: none;
    outline: none;
    padding: 0.5em 1em;
    border-radius: 24px;
    background: #7c7c7c2b;
    color: white;
    font-family: inherit;
    font-size: 120%;
    width:calc(100% - 100px);
}

button:hover {
    background: #7c7c7c6b;
}

.weather.loading {
    visibility: hidden;
    max-height: 20px;
    position: relative;
  }
  
  .weather.loading:after {
    visibility: visible;
    content: "Loading...";
    color: white;
    position: absolute;
    top: 0;
    left: 20px;
  }