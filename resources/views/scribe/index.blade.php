<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.9.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.9.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-documentation">
                                <a href="#endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-oauth2-callback">
                                <a href="#endpoints-GETapi-oauth2-callback">Handles the OAuth2 callback and retrieves the required file for the redirect.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">POST api/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">POST api/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-logout">
                                <a href="#endpoints-POSTapi-logout">POST api/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-me">
                                <a href="#endpoints-GETapi-me">GET api/me</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-positions">
                                <a href="#endpoints-GETapi-positions">GET api/positions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-positions">
                                <a href="#endpoints-POSTapi-positions">POST api/positions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-positions--id-">
                                <a href="#endpoints-GETapi-positions--id-">GET api/positions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-positions--id-">
                                <a href="#endpoints-PUTapi-positions--id-">PUT api/positions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-positions--id-">
                                <a href="#endpoints-DELETEapi-positions--id-">DELETE api/positions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-departments">
                                <a href="#endpoints-GETapi-departments">GET api/departments</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-departments">
                                <a href="#endpoints-POSTapi-departments">POST api/departments</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-departments--id-">
                                <a href="#endpoints-GETapi-departments--id-">GET api/departments/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-departments--id-">
                                <a href="#endpoints-PUTapi-departments--id-">PUT api/departments/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-departments--id-">
                                <a href="#endpoints-DELETEapi-departments--id-">DELETE api/departments/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-roles">
                                <a href="#endpoints-GETapi-roles">GET api/roles</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-roles">
                                <a href="#endpoints-POSTapi-roles">POST api/roles</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-roles--id-">
                                <a href="#endpoints-GETapi-roles--id-">GET api/roles/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-roles--id-">
                                <a href="#endpoints-PUTapi-roles--id-">PUT api/roles/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-roles--id-">
                                <a href="#endpoints-DELETEapi-roles--id-">DELETE api/roles/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-employees">
                                <a href="#endpoints-GETapi-employees">GET api/employees</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-employees">
                                <a href="#endpoints-POSTapi-employees">POST api/employees</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-employees--id-">
                                <a href="#endpoints-GETapi-employees--id-">GET api/employees/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-employees--id-">
                                <a href="#endpoints-PUTapi-employees--id-">PUT api/employees/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-employees--id-">
                                <a href="#endpoints-DELETEapi-employees--id-">DELETE api/employees/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-employees--id--status">
                                <a href="#endpoints-PUTapi-employees--id--status">PUT api/employees/{id}/status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-shifts">
                                <a href="#endpoints-GETapi-shifts">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-shifts">
                                <a href="#endpoints-POSTapi-shifts">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-shifts--id-">
                                <a href="#endpoints-GETapi-shifts--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-shifts--id-">
                                <a href="#endpoints-PUTapi-shifts--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-shifts--id-">
                                <a href="#endpoints-DELETEapi-shifts--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-shift-schedules">
                                <a href="#endpoints-GETapi-shift-schedules">GET api/shift-schedules</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-shift-schedules">
                                <a href="#endpoints-POSTapi-shift-schedules">POST api/shift-schedules</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-shift-schedules--id-">
                                <a href="#endpoints-GETapi-shift-schedules--id-">GET api/shift-schedules/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-shift-schedules--id-">
                                <a href="#endpoints-PUTapi-shift-schedules--id-">PUT api/shift-schedules/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-shift-schedules--id-">
                                <a href="#endpoints-DELETEapi-shift-schedules--id-">DELETE api/shift-schedules/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-shift-schedules--id--details">
                                <a href="#endpoints-GETapi-shift-schedules--id--details">GET api/shift-schedules/{id}/details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-shift-schedule-details">
                                <a href="#endpoints-GETapi-shift-schedule-details">GET api/shift-schedule-details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-shift-schedule-details">
                                <a href="#endpoints-POSTapi-shift-schedule-details">POST api/shift-schedule-details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-shift-schedule-details--id-">
                                <a href="#endpoints-GETapi-shift-schedule-details--id-">GET api/shift-schedule-details/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-shift-schedule-details--id-">
                                <a href="#endpoints-PUTapi-shift-schedule-details--id-">PUT api/shift-schedule-details/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-shift-schedule-details--id-">
                                <a href="#endpoints-DELETEapi-shift-schedule-details--id-">DELETE api/shift-schedule-details/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-leave-types">
                                <a href="#endpoints-GETapi-leave-types">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-leave-types">
                                <a href="#endpoints-POSTapi-leave-types">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-leave-types--id-">
                                <a href="#endpoints-GETapi-leave-types--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-leave-types--id-">
                                <a href="#endpoints-PUTapi-leave-types--id-">Show the form for editing the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-leave-types--id-">
                                <a href="#endpoints-DELETEapi-leave-types--id-">DELETE api/leave-types/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users">
                                <a href="#endpoints-GETapi-users">GET api/users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-users">
                                <a href="#endpoints-POSTapi-users">POST api/users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users--id-">
                                <a href="#endpoints-GETapi-users--id-">GET api/users/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-users--id-">
                                <a href="#endpoints-PUTapi-users--id-">PUT api/users/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-users--id-">
                                <a href="#endpoints-DELETEapi-users--id-">DELETE api/users/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-allowances">
                                <a href="#endpoints-GETapi-allowances">GET api/allowances</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-allowances">
                                <a href="#endpoints-POSTapi-allowances">POST api/allowances</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-allowances--id-">
                                <a href="#endpoints-GETapi-allowances--id-">GET api/allowances/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-allowances--id-">
                                <a href="#endpoints-PUTapi-allowances--id-">PUT api/allowances/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-allowances--id-">
                                <a href="#endpoints-DELETEapi-allowances--id-">DELETE api/allowances/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-deductions">
                                <a href="#endpoints-GETapi-deductions">GET api/deductions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-deductions">
                                <a href="#endpoints-POSTapi-deductions">POST api/deductions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-deductions--id-">
                                <a href="#endpoints-GETapi-deductions--id-">GET api/deductions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-deductions--id-">
                                <a href="#endpoints-PUTapi-deductions--id-">PUT api/deductions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-deductions--id-">
                                <a href="#endpoints-DELETEapi-deductions--id-">DELETE api/deductions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-payrolls">
                                <a href="#endpoints-GETapi-payrolls">GET api/payrolls</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-payrolls--id-">
                                <a href="#endpoints-GETapi-payrolls--id-">GET api/payrolls/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-payroll-by-period">
                                <a href="#endpoints-POSTapi-payroll-by-period">POST api/payroll-by-period</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-payroll-generates">
                                <a href="#endpoints-POSTapi-payroll-generates">POST api/payroll-generates</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-attendance-settings">
                                <a href="#endpoints-GETapi-attendance-settings">GET api/attendance-settings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-attendance-settings">
                                <a href="#endpoints-POSTapi-attendance-settings">POST api/attendance-settings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-attendance-settings--id-">
                                <a href="#endpoints-GETapi-attendance-settings--id-">GET api/attendance-settings/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-attendance-settings--id-">
                                <a href="#endpoints-PUTapi-attendance-settings--id-">PUT api/attendance-settings/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-attendance-settings--id-">
                                <a href="#endpoints-DELETEapi-attendance-settings--id-">DELETE api/attendance-settings/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-attendances">
                                <a href="#endpoints-GETapi-attendances">GET api/attendances</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-check-in">
                                <a href="#endpoints-POSTapi-check-in">POST api/check-in</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-check-out">
                                <a href="#endpoints-POSTapi-check-out">POST api/check-out</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-summarise">
                                <a href="#endpoints-POSTapi-summarise">POST api/summarise</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-dinamic-qr">
                                <a href="#endpoints-GETapi-dinamic-qr">GET api/dinamic-qr</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-attendance-by-month">
                                <a href="#endpoints-POSTapi-attendance-by-month">POST api/attendance-by-month</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-leave-requests">
                                <a href="#endpoints-GETapi-leave-requests">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-leave-requests">
                                <a href="#endpoints-POSTapi-leave-requests">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-leave-requests--id-">
                                <a href="#endpoints-GETapi-leave-requests--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-leave-requests--id-">
                                <a href="#endpoints-PUTapi-leave-requests--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-leave-requests--id-">
                                <a href="#endpoints-DELETEapi-leave-requests--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-leave-requests--id--approve">
                                <a href="#endpoints-PUTapi-leave-requests--id--approve">PUT api/leave-requests/{id}/approve</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-leave-requests--id--reject">
                                <a href="#endpoints-PUTapi-leave-requests--id--reject">PUT api/leave-requests/{id}/reject</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-leave-request-by">
                                <a href="#endpoints-GETapi-leave-request-by">GET api/leave-request/by</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 1, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</h2>

<p>
</p>



<span id="example-requests-GETapi-documentation">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/documentation" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/documentation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-documentation">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-documentation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-documentation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-documentation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-documentation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-documentation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-documentation" data-method="GET"
      data-path="api/documentation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-documentation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-documentation"
                    onclick="tryItOut('GETapi-documentation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-documentation"
                    onclick="cancelTryOut('GETapi-documentation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-documentation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/documentation</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-oauth2-callback">Handles the OAuth2 callback and retrieves the required file for the redirect.</h2>

<p>
</p>



<span id="example-requests-GETapi-oauth2-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/oauth2-callback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/oauth2-callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-oauth2-callback">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=utf-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!doctype html&gt;
&lt;html lang=&quot;en-US&quot;&gt;
&lt;body&gt;
&lt;script src=&quot;oauth2-redirect.js&quot;&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-oauth2-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-oauth2-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-oauth2-callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-oauth2-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-oauth2-callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-oauth2-callback" data-method="GET"
      data-path="api/oauth2-callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-oauth2-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-oauth2-callback"
                    onclick="tryItOut('GETapi-oauth2-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-oauth2-callback"
                    onclick="cancelTryOut('GETapi-oauth2-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-oauth2-callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/oauth2-callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-login">POST api/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"+-0pBNvYgxwmi\\/#iw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "+-0pBNvYgxwmi\/#iw"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="+-0pBNvYgxwmi/#iw"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>+-0pBNvYgxwmi/#iw</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-register">POST api/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"nip\": \"architecto\",
    \"device_id\": \"architecto\",
    \"password\": \"]|{+-0pBNvYg\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "nip": "architecto",
    "device_id": "architecto",
    "password": "]|{+-0pBNvYg"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-register"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_login_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_login_at"                data-endpoint="POSTapi-register"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nip</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nip"                data-endpoint="POSTapi-register"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>nip</code> of an existing record in the employees table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>device_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="device_id"                data-endpoint="POSTapi-register"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="]|{+-0pBNvYg"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>]|{+-0pBNvYg</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-logout">POST api/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
</span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-me">GET api/me</h2>

<p>
</p>



<span id="example-requests-GETapi-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/me"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-me">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-me" data-method="GET"
      data-path="api/me"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-me"
                    onclick="tryItOut('GETapi-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-me"
                    onclick="cancelTryOut('GETapi-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-positions">GET api/positions</h2>

<p>
</p>



<span id="example-requests-GETapi-positions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/positions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/positions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-positions">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;List data position.&quot;,
        &quot;datas&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;position_name&quot;: &quot;Perawat&quot;,
                    &quot;base_salary&quot;: &quot;10000000.00&quot;,
                    &quot;description&quot;: &quot;Jabatan Perawat&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;position_name&quot;: &quot;Dokter&quot;,
                    &quot;base_salary&quot;: &quot;8000000.00&quot;,
                    &quot;description&quot;: &quot;Jabatan Dokter&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;position_name&quot;: &quot;Spesialis&quot;,
                    &quot;base_salary&quot;: &quot;6000000.00&quot;,
                    &quot;description&quot;: &quot;Jabatan Spesialis&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;
                },
                {
                    &quot;id&quot;: 4,
                    &quot;position_name&quot;: &quot;Ahli&quot;,
                    &quot;base_salary&quot;: &quot;4000000.00&quot;,
                    &quot;description&quot;: &quot;Jabatan Ahli&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;position_name&quot;: &quot;HRD&quot;,
                    &quot;base_salary&quot;: &quot;5000000.00&quot;,
                    &quot;description&quot;: &quot;Jabatan HRD&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/positions?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/positions?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/positions?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;page&quot;: 1,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/positions&quot;,
            &quot;per_page&quot;: 10,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 5,
            &quot;total&quot;: 5
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-positions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-positions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-positions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-positions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-positions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-positions" data-method="GET"
      data-path="api/positions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-positions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-positions"
                    onclick="tryItOut('GETapi-positions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-positions"
                    onclick="cancelTryOut('GETapi-positions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-positions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/positions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-positions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-positions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-positions">POST api/positions</h2>

<p>
</p>



<span id="example-requests-POSTapi-positions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/positions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"position_name\": \"architecto\",
    \"base_salary\": 4326.41688,
    \"description\": \"Velit et fugiat sunt nihil accusantium.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/positions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "position_name": "architecto",
    "base_salary": 4326.41688,
    "description": "Velit et fugiat sunt nihil accusantium."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-positions">
</span>
<span id="execution-results-POSTapi-positions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-positions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-positions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-positions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-positions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-positions" data-method="POST"
      data-path="api/positions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-positions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-positions"
                    onclick="tryItOut('POSTapi-positions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-positions"
                    onclick="cancelTryOut('POSTapi-positions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-positions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/positions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-positions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-positions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>position_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="position_name"                data-endpoint="POSTapi-positions"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>base_salary</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="base_salary"                data-endpoint="POSTapi-positions"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-positions"
               value="Velit et fugiat sunt nihil accusantium."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Velit et fugiat sunt nihil accusantium.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-positions--id-">GET api/positions/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-positions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/positions/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/positions/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-positions--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;Detail data position.&quot;,
        &quot;datas&quot;: {
            &quot;id&quot;: 1,
            &quot;position_name&quot;: &quot;Perawat&quot;,
            &quot;base_salary&quot;: &quot;10000000.00&quot;,
            &quot;description&quot;: &quot;Jabatan Perawat&quot;,
            &quot;created_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-positions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-positions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-positions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-positions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-positions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-positions--id-" data-method="GET"
      data-path="api/positions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-positions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-positions--id-"
                    onclick="tryItOut('GETapi-positions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-positions--id-"
                    onclick="cancelTryOut('GETapi-positions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-positions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/positions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-positions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-positions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-positions--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the position. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-positions--id-">PUT api/positions/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-positions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/positions/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"position_name\": \"architecto\",
    \"base_salary\": 4326.41688,
    \"description\": \"Velit et fugiat sunt nihil accusantium.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/positions/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "position_name": "architecto",
    "base_salary": 4326.41688,
    "description": "Velit et fugiat sunt nihil accusantium."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-positions--id-">
</span>
<span id="execution-results-PUTapi-positions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-positions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-positions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-positions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-positions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-positions--id-" data-method="PUT"
      data-path="api/positions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-positions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-positions--id-"
                    onclick="tryItOut('PUTapi-positions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-positions--id-"
                    onclick="cancelTryOut('PUTapi-positions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-positions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/positions/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/positions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-positions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-positions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-positions--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the position. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>position_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="position_name"                data-endpoint="PUTapi-positions--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>base_salary</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="base_salary"                data-endpoint="PUTapi-positions--id-"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-positions--id-"
               value="Velit et fugiat sunt nihil accusantium."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Velit et fugiat sunt nihil accusantium.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-positions--id-">DELETE api/positions/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-positions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/positions/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/positions/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-positions--id-">
</span>
<span id="execution-results-DELETEapi-positions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-positions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-positions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-positions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-positions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-positions--id-" data-method="DELETE"
      data-path="api/positions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-positions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-positions--id-"
                    onclick="tryItOut('DELETEapi-positions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-positions--id-"
                    onclick="cancelTryOut('DELETEapi-positions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-positions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/positions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-positions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-positions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-positions--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the position. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-departments">GET api/departments</h2>

<p>
</p>



<span id="example-requests-GETapi-departments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/departments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/departments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-departments">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;List data department.&quot;,
        &quot;datas&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;department_name&quot;: &quot;Rawat Inap&quot;,
                    &quot;location&quot;: &quot;Lantai 1&quot;,
                    &quot;description&quot;: &quot;Pelayanan Rawat Inap Rumah Sakit&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;department_name&quot;: &quot;Rawat Jalan&quot;,
                    &quot;location&quot;: &quot;Lantai 2&quot;,
                    &quot;description&quot;: &quot;Pelayanan Rawat Jalan Rumah Sakit&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;department_name&quot;: &quot;Radiologi&quot;,
                    &quot;location&quot;: &quot;Lantai 3&quot;,
                    &quot;description&quot;: &quot;Pelayanan Radiologi Rumah Sakit&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;
                },
                {
                    &quot;id&quot;: 4,
                    &quot;department_name&quot;: &quot;Laboratorium&quot;,
                    &quot;location&quot;: &quot;Lantai 4&quot;,
                    &quot;description&quot;: &quot;Pelayanan Laboratorium Rumah Sakit&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;department_name&quot;: &quot;Farmasi&quot;,
                    &quot;location&quot;: &quot;Lantai 5&quot;,
                    &quot;description&quot;: &quot;Pelayanan Farmasi Rumah Sakit&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;
                },
                {
                    &quot;id&quot;: 6,
                    &quot;department_name&quot;: &quot;HRD&quot;,
                    &quot;location&quot;: null,
                    &quot;description&quot;: &quot;Mengelola pegawai rumah sakit&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:42:09.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:42:09.000000Z&quot;
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/departments?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/departments?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/departments?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;page&quot;: 1,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/departments&quot;,
            &quot;per_page&quot;: 10,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 6,
            &quot;total&quot;: 6
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-departments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-departments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-departments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-departments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-departments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-departments" data-method="GET"
      data-path="api/departments"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-departments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-departments"
                    onclick="tryItOut('GETapi-departments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-departments"
                    onclick="cancelTryOut('GETapi-departments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-departments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/departments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-departments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-departments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-departments">POST api/departments</h2>

<p>
</p>



<span id="example-requests-POSTapi-departments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/departments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"department_name\": \"architecto\",
    \"location\": \"n\",
    \"description\": \"Animi quos velit et fugiat.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/departments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "department_name": "architecto",
    "location": "n",
    "description": "Animi quos velit et fugiat."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-departments">
</span>
<span id="execution-results-POSTapi-departments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-departments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-departments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-departments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-departments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-departments" data-method="POST"
      data-path="api/departments"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-departments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-departments"
                    onclick="tryItOut('POSTapi-departments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-departments"
                    onclick="cancelTryOut('POSTapi-departments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-departments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/departments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-departments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-departments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>department_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="department_name"                data-endpoint="POSTapi-departments"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="POSTapi-departments"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-departments"
               value="Animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Animi quos velit et fugiat.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-departments--id-">GET api/departments/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-departments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/departments/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/departments/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-departments--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;Detail data department.&quot;,
        &quot;datas&quot;: {
            &quot;id&quot;: 1,
            &quot;department_name&quot;: &quot;Rawat Inap&quot;,
            &quot;location&quot;: &quot;Lantai 1&quot;,
            &quot;description&quot;: &quot;Pelayanan Rawat Inap Rumah Sakit&quot;,
            &quot;created_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-departments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-departments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-departments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-departments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-departments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-departments--id-" data-method="GET"
      data-path="api/departments/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-departments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-departments--id-"
                    onclick="tryItOut('GETapi-departments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-departments--id-"
                    onclick="cancelTryOut('GETapi-departments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-departments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/departments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-departments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-departments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-departments--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the department. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-departments--id-">PUT api/departments/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-departments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/departments/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"department_name\": \"architecto\",
    \"location\": \"n\",
    \"description\": \"Animi quos velit et fugiat.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/departments/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "department_name": "architecto",
    "location": "n",
    "description": "Animi quos velit et fugiat."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-departments--id-">
</span>
<span id="execution-results-PUTapi-departments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-departments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-departments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-departments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-departments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-departments--id-" data-method="PUT"
      data-path="api/departments/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-departments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-departments--id-"
                    onclick="tryItOut('PUTapi-departments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-departments--id-"
                    onclick="cancelTryOut('PUTapi-departments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-departments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/departments/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/departments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-departments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-departments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-departments--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the department. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>department_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="department_name"                data-endpoint="PUTapi-departments--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="PUTapi-departments--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-departments--id-"
               value="Animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Animi quos velit et fugiat.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-departments--id-">DELETE api/departments/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-departments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/departments/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/departments/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-departments--id-">
</span>
<span id="execution-results-DELETEapi-departments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-departments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-departments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-departments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-departments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-departments--id-" data-method="DELETE"
      data-path="api/departments/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-departments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-departments--id-"
                    onclick="tryItOut('DELETEapi-departments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-departments--id-"
                    onclick="cancelTryOut('DELETEapi-departments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-departments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/departments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-departments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-departments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-departments--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the department. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-roles">GET api/roles</h2>

<p>
</p>



<span id="example-requests-GETapi-roles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/roles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/roles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-roles">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;List data role.&quot;,
        &quot;datas&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;role_name&quot;: &quot;Super Admin&quot;,
                    &quot;description&quot;: &quot;Mengelola seluruh data rumah sakit.&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:39:06.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:39:06.000000Z&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;role_name&quot;: &quot;HR Admin&quot;,
                    &quot;description&quot;: &quot;Mengelola data karyawan dan data kepegawaian Rumah Sakit.&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:39:06.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:39:06.000000Z&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;role_name&quot;: &quot;Staff&quot;,
                    &quot;description&quot;: &quot;Mengelola data kehadiran dan data absensi pribadi karyawan.&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:39:06.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:39:06.000000Z&quot;
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/roles?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/roles?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/roles?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;page&quot;: 1,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/roles&quot;,
            &quot;per_page&quot;: 10,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 3,
            &quot;total&quot;: 3
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-roles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-roles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-roles"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-roles">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-roles" data-method="GET"
      data-path="api/roles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-roles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-roles"
                    onclick="tryItOut('GETapi-roles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-roles"
                    onclick="cancelTryOut('GETapi-roles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-roles"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/roles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-roles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-roles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-roles">POST api/roles</h2>

<p>
</p>



<span id="example-requests-POSTapi-roles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/roles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"role_name\": \"architecto\",
    \"description\": \"Et animi quos velit et fugiat.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/roles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "role_name": "architecto",
    "description": "Et animi quos velit et fugiat."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-roles">
</span>
<span id="execution-results-POSTapi-roles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-roles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-roles"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-roles">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-roles" data-method="POST"
      data-path="api/roles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-roles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-roles"
                    onclick="tryItOut('POSTapi-roles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-roles"
                    onclick="cancelTryOut('POSTapi-roles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-roles"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/roles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-roles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-roles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="role_name"                data-endpoint="POSTapi-roles"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-roles"
               value="Et animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Et animi quos velit et fugiat.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-roles--id-">GET api/roles/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-roles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/roles/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/roles/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-roles--id-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-roles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-roles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-roles--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-roles--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-roles--id-" data-method="GET"
      data-path="api/roles/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-roles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-roles--id-"
                    onclick="tryItOut('GETapi-roles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-roles--id-"
                    onclick="cancelTryOut('GETapi-roles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-roles--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/roles/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-roles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-roles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-roles--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the role. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-roles--id-">PUT api/roles/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-roles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/roles/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"role_name\": \"architecto\",
    \"description\": \"Et animi quos velit et fugiat.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/roles/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "role_name": "architecto",
    "description": "Et animi quos velit et fugiat."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-roles--id-">
</span>
<span id="execution-results-PUTapi-roles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-roles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-roles--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-roles--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-roles--id-" data-method="PUT"
      data-path="api/roles/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-roles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-roles--id-"
                    onclick="tryItOut('PUTapi-roles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-roles--id-"
                    onclick="cancelTryOut('PUTapi-roles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-roles--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/roles/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/roles/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-roles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-roles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-roles--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the role. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="role_name"                data-endpoint="PUTapi-roles--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-roles--id-"
               value="Et animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Et animi quos velit et fugiat.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-roles--id-">DELETE api/roles/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-roles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/roles/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/roles/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-roles--id-">
</span>
<span id="execution-results-DELETEapi-roles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-roles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-roles--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-roles--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-roles--id-" data-method="DELETE"
      data-path="api/roles/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-roles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-roles--id-"
                    onclick="tryItOut('DELETEapi-roles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-roles--id-"
                    onclick="cancelTryOut('DELETEapi-roles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-roles--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/roles/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-roles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-roles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-roles--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the role. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-employees">GET api/employees</h2>

<p>
</p>



<span id="example-requests-GETapi-employees">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/employees" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/employees"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-employees">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;List data employee.&quot;,
        &quot;datas&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;nip&quot;: &quot;199205142023052004&quot;,
                    &quot;nik&quot;: &quot;3276010101402004&quot;,
                    &quot;full_name&quot;: &quot;Rina Amalia&quot;,
                    &quot;gender&quot;: &quot;female&quot;,
                    &quot;birth_place&quot;: &quot;Surabaya&quot;,
                    &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                    &quot;address&quot;: &quot;Perum Permata Biru Blok C-05&quot;,
                    &quot;phone_number&quot;: &quot;85744556677&quot;,
                    &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
                    &quot;photo&quot;: null,
                    &quot;hire_date&quot;: &quot;2026-03-10&quot;,
                    &quot;employee_status&quot;: &quot;active&quot;,
                    &quot;position_id&quot;: 1,
                    &quot;department_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
                    &quot;position&quot;: {
                        &quot;id&quot;: 1,
                        &quot;position_name&quot;: &quot;Perawat&quot;,
                        &quot;base_salary&quot;: &quot;10000000.00&quot;,
                        &quot;description&quot;: &quot;Jabatan Perawat&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;
                    },
                    &quot;department&quot;: {
                        &quot;id&quot;: 2,
                        &quot;department_name&quot;: &quot;Rawat Jalan&quot;,
                        &quot;location&quot;: &quot;Lantai 2&quot;,
                        &quot;description&quot;: &quot;Pelayanan Rawat Jalan Rumah Sakit&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;
                    }
                },
                {
                    &quot;id&quot;: 3,
                    &quot;nip&quot;: &quot;199402152022031001&quot;,
                    &quot;nik&quot;: &quot;3276010101402005&quot;,
                    &quot;full_name&quot;: &quot;Fasterino Rafael&quot;,
                    &quot;gender&quot;: &quot;male&quot;,
                    &quot;birth_place&quot;: &quot;Kediri&quot;,
                    &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                    &quot;address&quot;: &quot;JL. Betet Bawang, kediri, Jawa Timur&quot;,
                    &quot;phone_number&quot;: &quot;899506027877&quot;,
                    &quot;email&quot;: &quot;rinofaster89@gmail.com&quot;,
                    &quot;photo&quot;: null,
                    &quot;hire_date&quot;: &quot;2026-03-19&quot;,
                    &quot;employee_status&quot;: &quot;active&quot;,
                    &quot;position_id&quot;: 5,
                    &quot;department_id&quot;: 6,
                    &quot;created_at&quot;: &quot;2026-03-28T04:42:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:42:53.000000Z&quot;,
                    &quot;position&quot;: {
                        &quot;id&quot;: 5,
                        &quot;position_name&quot;: &quot;HRD&quot;,
                        &quot;base_salary&quot;: &quot;5000000.00&quot;,
                        &quot;description&quot;: &quot;Jabatan HRD&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;
                    },
                    &quot;department&quot;: {
                        &quot;id&quot;: 6,
                        &quot;department_name&quot;: &quot;HRD&quot;,
                        &quot;location&quot;: null,
                        &quot;description&quot;: &quot;Mengelola pegawai rumah sakit&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:42:09.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:42:09.000000Z&quot;
                    }
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/employees?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/employees?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/employees?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;page&quot;: 1,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/employees&quot;,
            &quot;per_page&quot;: 10,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 2,
            &quot;total&quot;: 2
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-employees" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-employees"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-employees"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-employees" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-employees">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-employees" data-method="GET"
      data-path="api/employees"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-employees', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-employees"
                    onclick="tryItOut('GETapi-employees');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-employees"
                    onclick="cancelTryOut('GETapi-employees');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-employees"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/employees</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-employees"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-employees"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-employees">POST api/employees</h2>

<p>
</p>



<span id="example-requests-POSTapi-employees">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/employees" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "nip=b"\
    --form "nik=n"\
    --form "full_name=g"\
    --form "gender=male"\
    --form "birth_place=z"\
    --form "birth_date=2026-04-01T16:45:58"\
    --form "address=architecto"\
    --form "phone_number=ngzmiyvdljnikhwa"\
    --form "email=breitenberg.gilbert@example.com"\
    --form "hire_date=2026-04-01T16:45:58"\
    --form "position_id=16"\
    --form "department_id=16"\
    --form "photo=@C:\Users\RiNo\AppData\Local\Temp\phpC9D9.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/employees"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('nip', 'b');
body.append('nik', 'n');
body.append('full_name', 'g');
body.append('gender', 'male');
body.append('birth_place', 'z');
body.append('birth_date', '2026-04-01T16:45:58');
body.append('address', 'architecto');
body.append('phone_number', 'ngzmiyvdljnikhwa');
body.append('email', 'breitenberg.gilbert@example.com');
body.append('hire_date', '2026-04-01T16:45:58');
body.append('position_id', '16');
body.append('department_id', '16');
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-employees">
</span>
<span id="execution-results-POSTapi-employees" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-employees"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-employees"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-employees" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-employees">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-employees" data-method="POST"
      data-path="api/employees"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-employees', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-employees"
                    onclick="tryItOut('POSTapi-employees');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-employees"
                    onclick="cancelTryOut('POSTapi-employees');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-employees"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/employees</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-employees"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-employees"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nip</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nip"                data-endpoint="POSTapi-employees"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nik</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nik"                data-endpoint="POSTapi-employees"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>full_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="full_name"                data-endpoint="POSTapi-employees"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>g</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="gender"                data-endpoint="POSTapi-employees"
               value="male"
               data-component="body">
    <br>
<p>Example: <code>male</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>male</code></li> <li><code>female</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>birth_place</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="birth_place"                data-endpoint="POSTapi-employees"
               value="z"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>z</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>birth_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="birth_date"                data-endpoint="POSTapi-employees"
               value="2026-04-01T16:45:58"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-04-01T16:45:58</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="POSTapi-employees"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_number"                data-endpoint="POSTapi-employees"
               value="ngzmiyvdljnikhwa"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>ngzmiyvdljnikhwa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-employees"
               value="breitenberg.gilbert@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>breitenberg.gilbert@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>photo</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="photo"                data-endpoint="POSTapi-employees"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\RiNo\AppData\Local\Temp\phpC9D9.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>hire_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="hire_date"                data-endpoint="POSTapi-employees"
               value="2026-04-01T16:45:58"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-04-01T16:45:58</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>position_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="position_id"                data-endpoint="POSTapi-employees"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the positions table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>department_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="department_id"                data-endpoint="POSTapi-employees"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the departments table. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-employees--id-">GET api/employees/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-employees--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/employees/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/employees/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-employees--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;Detail data employee.&quot;,
        &quot;datas&quot;: {
            &quot;id&quot;: 1,
            &quot;nip&quot;: &quot;199205142023052004&quot;,
            &quot;nik&quot;: &quot;3276010101402004&quot;,
            &quot;full_name&quot;: &quot;Rina Amalia&quot;,
            &quot;gender&quot;: &quot;female&quot;,
            &quot;birth_place&quot;: &quot;Surabaya&quot;,
            &quot;birth_date&quot;: &quot;2026-03-01&quot;,
            &quot;address&quot;: &quot;Perum Permata Biru Blok C-05&quot;,
            &quot;phone_number&quot;: &quot;85744556677&quot;,
            &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
            &quot;photo&quot;: null,
            &quot;hire_date&quot;: &quot;2026-03-10&quot;,
            &quot;employee_status&quot;: &quot;active&quot;,
            &quot;position_id&quot;: 1,
            &quot;department_id&quot;: 2,
            &quot;created_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
            &quot;position&quot;: {
                &quot;id&quot;: 1,
                &quot;position_name&quot;: &quot;Perawat&quot;,
                &quot;base_salary&quot;: &quot;10000000.00&quot;,
                &quot;description&quot;: &quot;Jabatan Perawat&quot;,
                &quot;created_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-28T04:39:02.000000Z&quot;
            },
            &quot;department&quot;: {
                &quot;id&quot;: 2,
                &quot;department_name&quot;: &quot;Rawat Jalan&quot;,
                &quot;location&quot;: &quot;Lantai 2&quot;,
                &quot;description&quot;: &quot;Pelayanan Rawat Jalan Rumah Sakit&quot;,
                &quot;created_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-28T04:38:32.000000Z&quot;
            }
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-employees--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-employees--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-employees--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-employees--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-employees--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-employees--id-" data-method="GET"
      data-path="api/employees/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-employees--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-employees--id-"
                    onclick="tryItOut('GETapi-employees--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-employees--id-"
                    onclick="cancelTryOut('GETapi-employees--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-employees--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/employees/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-employees--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-employees--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-employees--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the employee. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-employees--id-">PUT api/employees/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-employees--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/employees/1" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "nip=b"\
    --form "nik=n"\
    --form "full_name=g"\
    --form "gender=female"\
    --form "birth_place=z"\
    --form "birth_date=2026-04-01T16:45:58"\
    --form "address=architecto"\
    --form "phone_number=ngzmiyvdljnikhwa"\
    --form "email=breitenberg.gilbert@example.com"\
    --form "hire_date=2026-04-01T16:45:58"\
    --form "employee_status=u"\
    --form "position_id=16"\
    --form "department_id=16"\
    --form "photo=@C:\Users\RiNo\AppData\Local\Temp\phpCA09.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/employees/1"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('nip', 'b');
body.append('nik', 'n');
body.append('full_name', 'g');
body.append('gender', 'female');
body.append('birth_place', 'z');
body.append('birth_date', '2026-04-01T16:45:58');
body.append('address', 'architecto');
body.append('phone_number', 'ngzmiyvdljnikhwa');
body.append('email', 'breitenberg.gilbert@example.com');
body.append('hire_date', '2026-04-01T16:45:58');
body.append('employee_status', 'u');
body.append('position_id', '16');
body.append('department_id', '16');
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-employees--id-">
</span>
<span id="execution-results-PUTapi-employees--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-employees--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-employees--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-employees--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-employees--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-employees--id-" data-method="PUT"
      data-path="api/employees/{id}"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-employees--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-employees--id-"
                    onclick="tryItOut('PUTapi-employees--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-employees--id-"
                    onclick="cancelTryOut('PUTapi-employees--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-employees--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/employees/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/employees/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-employees--id-"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-employees--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-employees--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the employee. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nip</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nip"                data-endpoint="PUTapi-employees--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nik</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nik"                data-endpoint="PUTapi-employees--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>full_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="full_name"                data-endpoint="PUTapi-employees--id-"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>g</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="gender"                data-endpoint="PUTapi-employees--id-"
               value="female"
               data-component="body">
    <br>
<p>Example: <code>female</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>male</code></li> <li><code>female</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>birth_place</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="birth_place"                data-endpoint="PUTapi-employees--id-"
               value="z"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>z</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>birth_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="birth_date"                data-endpoint="PUTapi-employees--id-"
               value="2026-04-01T16:45:58"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-04-01T16:45:58</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="PUTapi-employees--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_number"                data-endpoint="PUTapi-employees--id-"
               value="ngzmiyvdljnikhwa"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>ngzmiyvdljnikhwa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-employees--id-"
               value="breitenberg.gilbert@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>breitenberg.gilbert@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>photo</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="photo"                data-endpoint="PUTapi-employees--id-"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\RiNo\AppData\Local\Temp\phpCA09.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>hire_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="hire_date"                data-endpoint="PUTapi-employees--id-"
               value="2026-04-01T16:45:58"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-04-01T16:45:58</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>employee_status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="employee_status"                data-endpoint="PUTapi-employees--id-"
               value="u"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>u</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>position_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="position_id"                data-endpoint="PUTapi-employees--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the positions table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>department_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="department_id"                data-endpoint="PUTapi-employees--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the departments table. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-employees--id-">DELETE api/employees/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-employees--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/employees/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/employees/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-employees--id-">
</span>
<span id="execution-results-DELETEapi-employees--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-employees--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-employees--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-employees--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-employees--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-employees--id-" data-method="DELETE"
      data-path="api/employees/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-employees--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-employees--id-"
                    onclick="tryItOut('DELETEapi-employees--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-employees--id-"
                    onclick="cancelTryOut('DELETEapi-employees--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-employees--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/employees/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-employees--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-employees--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-employees--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the employee. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-employees--id--status">PUT api/employees/{id}/status</h2>

<p>
</p>



<span id="example-requests-PUTapi-employees--id--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/employees/1/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"employee_status\": \"resigned\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/employees/1/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "employee_status": "resigned"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-employees--id--status">
</span>
<span id="execution-results-PUTapi-employees--id--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-employees--id--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-employees--id--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-employees--id--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-employees--id--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-employees--id--status" data-method="PUT"
      data-path="api/employees/{id}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-employees--id--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-employees--id--status"
                    onclick="tryItOut('PUTapi-employees--id--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-employees--id--status"
                    onclick="cancelTryOut('PUTapi-employees--id--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-employees--id--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/employees/{id}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-employees--id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-employees--id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-employees--id--status"
               value="1"
               data-component="url">
    <br>
<p>The ID of the employee. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>employee_status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="employee_status"                data-endpoint="PUTapi-employees--id--status"
               value="resigned"
               data-component="body">
    <br>
<p>Example: <code>resigned</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>active</code></li> <li><code>inactive</code></li> <li><code>terminated</code></li> <li><code>resigned</code></li> <li><code>on_leave</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-shifts">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-shifts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/shifts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shifts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-shifts">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;List data shift.&quot;,
        &quot;datas&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;shift_name&quot;: &quot;Pagi&quot;,
                    &quot;start_time&quot;: &quot;07:00:00&quot;,
                    &quot;end_time&quot;: &quot;15:00:00&quot;,
                    &quot;description&quot;: &quot;Shift pagi untuk pelayanan utama&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;shift_name&quot;: &quot;Sore&quot;,
                    &quot;start_time&quot;: &quot;15:00:00&quot;,
                    &quot;end_time&quot;: &quot;23:00:00&quot;,
                    &quot;description&quot;: &quot;Shift sore untuk pelayanan lanjutan&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;shift_name&quot;: &quot;Malam&quot;,
                    &quot;start_time&quot;: &quot;23:00:00&quot;,
                    &quot;end_time&quot;: &quot;07:00:00&quot;,
                    &quot;description&quot;: &quot;Shift sore untuk pelayanan 24 jam&quot;,
                    &quot;created_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/shifts?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/shifts?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/shifts?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;page&quot;: 1,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/shifts&quot;,
            &quot;per_page&quot;: 10,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 3,
            &quot;total&quot;: 3
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-shifts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-shifts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shifts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-shifts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shifts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-shifts" data-method="GET"
      data-path="api/shifts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-shifts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-shifts"
                    onclick="tryItOut('GETapi-shifts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-shifts"
                    onclick="cancelTryOut('GETapi-shifts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-shifts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/shifts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-shifts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-shifts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-shifts">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-shifts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/shifts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"shift_name\": \"architecto\",
    \"start_time\": \"16:45\",
    \"end_time\": \"16:45\",
    \"description\": \"Et animi quos velit et fugiat.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shifts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "shift_name": "architecto",
    "start_time": "16:45",
    "end_time": "16:45",
    "description": "Et animi quos velit et fugiat."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-shifts">
</span>
<span id="execution-results-POSTapi-shifts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-shifts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-shifts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-shifts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-shifts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-shifts" data-method="POST"
      data-path="api/shifts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-shifts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-shifts"
                    onclick="tryItOut('POSTapi-shifts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-shifts"
                    onclick="cancelTryOut('POSTapi-shifts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-shifts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/shifts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-shifts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-shifts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shift_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="shift_name"                data-endpoint="POSTapi-shifts"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_time"                data-endpoint="POSTapi-shifts"
               value="16:45"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>16:45</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="POSTapi-shifts"
               value="16:45"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>16:45</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-shifts"
               value="Et animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Et animi quos velit et fugiat.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-shifts--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-shifts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/shifts/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shifts/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-shifts--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;Detail data shift.&quot;,
        &quot;datas&quot;: {
            &quot;id&quot;: 1,
            &quot;shift_name&quot;: &quot;Pagi&quot;,
            &quot;start_time&quot;: &quot;07:00:00&quot;,
            &quot;end_time&quot;: &quot;15:00:00&quot;,
            &quot;description&quot;: &quot;Shift pagi untuk pelayanan utama&quot;,
            &quot;created_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-shifts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-shifts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shifts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-shifts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shifts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-shifts--id-" data-method="GET"
      data-path="api/shifts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-shifts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-shifts--id-"
                    onclick="tryItOut('GETapi-shifts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-shifts--id-"
                    onclick="cancelTryOut('GETapi-shifts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-shifts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/shifts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-shifts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-shifts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-shifts--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the shift. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-shifts--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-shifts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/shifts/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"shift_name\": \"architecto\",
    \"start_time\": \"16:45\",
    \"end_time\": \"16:45\",
    \"description\": \"Et animi quos velit et fugiat.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shifts/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "shift_name": "architecto",
    "start_time": "16:45",
    "end_time": "16:45",
    "description": "Et animi quos velit et fugiat."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-shifts--id-">
</span>
<span id="execution-results-PUTapi-shifts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-shifts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-shifts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-shifts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-shifts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-shifts--id-" data-method="PUT"
      data-path="api/shifts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-shifts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-shifts--id-"
                    onclick="tryItOut('PUTapi-shifts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-shifts--id-"
                    onclick="cancelTryOut('PUTapi-shifts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-shifts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/shifts/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/shifts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-shifts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-shifts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-shifts--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the shift. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shift_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="shift_name"                data-endpoint="PUTapi-shifts--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_time"                data-endpoint="PUTapi-shifts--id-"
               value="16:45"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>16:45</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="PUTapi-shifts--id-"
               value="16:45"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>16:45</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-shifts--id-"
               value="Et animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Et animi quos velit et fugiat.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-shifts--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-shifts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/shifts/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shifts/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-shifts--id-">
</span>
<span id="execution-results-DELETEapi-shifts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-shifts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-shifts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-shifts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-shifts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-shifts--id-" data-method="DELETE"
      data-path="api/shifts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-shifts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-shifts--id-"
                    onclick="tryItOut('DELETEapi-shifts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-shifts--id-"
                    onclick="cancelTryOut('DELETEapi-shifts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-shifts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/shifts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-shifts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-shifts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-shifts--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the shift. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-shift-schedules">GET api/shift-schedules</h2>

<p>
</p>



<span id="example-requests-GETapi-shift-schedules">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/shift-schedules" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shift-schedules"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-shift-schedules">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;List data shift schedule.&quot;,
        &quot;datas&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                    &quot;created_by&quot;: &quot;Fasterino&quot;,
                    &quot;updated_by&quot;: &quot;&quot;,
                    &quot;departement_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
                    &quot;shift_schedules_details&quot;: [
                        {
                            &quot;id&quot;: 63,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 64,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-02&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 2,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 65,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-03-03&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 66,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-04&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 67,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-03-05&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 68,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-06&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 69,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-07&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 2,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 70,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-08&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 71,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-09&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 72,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-10&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 73,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-11&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 2,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 74,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-12&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 75,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-03-13&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 76,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-14&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 2,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 77,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-15&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 78,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-16&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 79,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-17&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 80,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-03-18&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 81,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-03-19&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 82,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-20&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 2,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 83,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-21&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 84,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-22&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 85,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-23&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 2,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 86,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-03-24&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 87,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-03-25&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 88,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-03-26&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 89,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-27&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 90,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-28&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 91,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-03-29&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 92,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-30&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 93,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-03-31&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 4,
                            &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                        }
                    ]
                },
                {
                    &quot;id&quot;: 5,
                    &quot;schedule_date&quot;: &quot;2026-04-01&quot;,
                    &quot;created_by&quot;: &quot;Fasterino&quot;,
                    &quot;updated_by&quot;: &quot;&quot;,
                    &quot;departement_id&quot;: 1,
                    &quot;created_at&quot;: &quot;2026-04-01T08:24:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-04-01T08:24:11.000000Z&quot;,
                    &quot;shift_schedules_details&quot;: []
                },
                {
                    &quot;id&quot;: 6,
                    &quot;schedule_date&quot;: &quot;2026-04-01&quot;,
                    &quot;created_by&quot;: &quot;Fasterino&quot;,
                    &quot;updated_by&quot;: &quot;&quot;,
                    &quot;departement_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2026-04-01T08:24:31.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-04-01T08:24:31.000000Z&quot;,
                    &quot;shift_schedules_details&quot;: [
                        {
                            &quot;id&quot;: 94,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-01&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 2,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 95,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-04-02&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:36:06.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 96,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-04-03&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:36:08.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 97,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-04-04&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:36:11.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 98,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-05&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 99,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-04-06&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 100,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-07&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 2,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 101,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-04-08&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 102,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-04-09&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 103,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-04-10&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 104,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-11&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 2,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 105,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-12&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 106,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-13&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 107,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-14&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 108,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-15&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 109,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-16&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 110,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-17&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 111,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-04-18&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 112,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-19&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 2,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 113,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-20&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 114,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-04-21&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 115,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-22&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 2,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 116,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-04-23&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 117,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-24&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 118,
                            &quot;is_off&quot;: 1,
                            &quot;schedule_date&quot;: &quot;2026-04-25&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: null,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 119,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-26&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 2,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 120,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-27&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 121,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-28&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 1,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 122,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-29&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 3,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        },
                        {
                            &quot;id&quot;: 123,
                            &quot;is_off&quot;: 0,
                            &quot;schedule_date&quot;: &quot;2026-04-30&quot;,
                            &quot;employee_id&quot;: 1,
                            &quot;shift_id&quot;: 2,
                            &quot;shift_schedule_id&quot;: 6,
                            &quot;created_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-04-01T08:24:32.000000Z&quot;
                        }
                    ]
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/shift-schedules?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/shift-schedules?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/shift-schedules?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;page&quot;: 1,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/shift-schedules&quot;,
            &quot;per_page&quot;: 10,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 3,
            &quot;total&quot;: 3
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-shift-schedules" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-shift-schedules"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shift-schedules"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-shift-schedules" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shift-schedules">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-shift-schedules" data-method="GET"
      data-path="api/shift-schedules"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-shift-schedules', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-shift-schedules"
                    onclick="tryItOut('GETapi-shift-schedules');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-shift-schedules"
                    onclick="cancelTryOut('GETapi-shift-schedules');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-shift-schedules"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/shift-schedules</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-shift-schedules"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-shift-schedules"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-shift-schedules">POST api/shift-schedules</h2>

<p>
</p>



<span id="example-requests-POSTapi-shift-schedules">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/shift-schedules" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"month\": 16,
    \"year\": 16,
    \"created_by\": \"architecto\",
    \"departement_id\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shift-schedules"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "month": 16,
    "year": 16,
    "created_by": "architecto",
    "departement_id": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-shift-schedules">
</span>
<span id="execution-results-POSTapi-shift-schedules" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-shift-schedules"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-shift-schedules"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-shift-schedules" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-shift-schedules">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-shift-schedules" data-method="POST"
      data-path="api/shift-schedules"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-shift-schedules', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-shift-schedules"
                    onclick="tryItOut('POSTapi-shift-schedules');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-shift-schedules"
                    onclick="cancelTryOut('POSTapi-shift-schedules');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-shift-schedules"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/shift-schedules</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-shift-schedules"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-shift-schedules"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>month</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="month"                data-endpoint="POSTapi-shift-schedules"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year"                data-endpoint="POSTapi-shift-schedules"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>created_by</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="created_by"                data-endpoint="POSTapi-shift-schedules"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>departement_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="departement_id"                data-endpoint="POSTapi-shift-schedules"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the departments table. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-shift-schedules--id-">GET api/shift-schedules/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-shift-schedules--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/shift-schedules/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shift-schedules/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-shift-schedules--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;Detail data shift schedule.&quot;,
        &quot;datas&quot;: {
            &quot;id&quot;: 4,
            &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
            &quot;created_by&quot;: &quot;Fasterino&quot;,
            &quot;updated_by&quot;: &quot;&quot;,
            &quot;departement_id&quot;: 2,
            &quot;created_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
            &quot;shift_schedules_details&quot;: [
                {
                    &quot;id&quot;: 63,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 1,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 64,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-02&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 2,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 65,
                    &quot;is_off&quot;: 1,
                    &quot;schedule_date&quot;: &quot;2026-03-03&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: null,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 66,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-04&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 1,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 67,
                    &quot;is_off&quot;: 1,
                    &quot;schedule_date&quot;: &quot;2026-03-05&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: null,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 68,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-06&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 1,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 69,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-07&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 2,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 70,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-08&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 1,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 71,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-09&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 3,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 72,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-10&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 3,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 73,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-11&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 2,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 74,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-12&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 1,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 75,
                    &quot;is_off&quot;: 1,
                    &quot;schedule_date&quot;: &quot;2026-03-13&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: null,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 76,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-14&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 2,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 77,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-15&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 1,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 78,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-16&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 3,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 79,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-17&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 3,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 80,
                    &quot;is_off&quot;: 1,
                    &quot;schedule_date&quot;: &quot;2026-03-18&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: null,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 81,
                    &quot;is_off&quot;: 1,
                    &quot;schedule_date&quot;: &quot;2026-03-19&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: null,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 82,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-20&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 2,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 83,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-21&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 1,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 84,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-22&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 1,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 85,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-23&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 2,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 86,
                    &quot;is_off&quot;: 1,
                    &quot;schedule_date&quot;: &quot;2026-03-24&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: null,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 87,
                    &quot;is_off&quot;: 1,
                    &quot;schedule_date&quot;: &quot;2026-03-25&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: null,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 88,
                    &quot;is_off&quot;: 1,
                    &quot;schedule_date&quot;: &quot;2026-03-26&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: null,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 89,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-27&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 3,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 90,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-28&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 1,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 91,
                    &quot;is_off&quot;: 1,
                    &quot;schedule_date&quot;: &quot;2026-03-29&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: null,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 92,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-30&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 3,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                },
                {
                    &quot;id&quot;: 93,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-31&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 3,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;
                }
            ]
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-shift-schedules--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-shift-schedules--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shift-schedules--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-shift-schedules--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shift-schedules--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-shift-schedules--id-" data-method="GET"
      data-path="api/shift-schedules/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-shift-schedules--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-shift-schedules--id-"
                    onclick="tryItOut('GETapi-shift-schedules--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-shift-schedules--id-"
                    onclick="cancelTryOut('GETapi-shift-schedules--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-shift-schedules--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/shift-schedules/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-shift-schedules--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-shift-schedules--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-shift-schedules--id-"
               value="4"
               data-component="url">
    <br>
<p>The ID of the shift schedule. Example: <code>4</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-shift-schedules--id-">PUT api/shift-schedules/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-shift-schedules--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/shift-schedules/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"month\": 16,
    \"year\": 16,
    \"created_by\": \"architecto\",
    \"updated_by\": \"architecto\",
    \"departement_id\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shift-schedules/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "month": 16,
    "year": 16,
    "created_by": "architecto",
    "updated_by": "architecto",
    "departement_id": 16
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-shift-schedules--id-">
</span>
<span id="execution-results-PUTapi-shift-schedules--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-shift-schedules--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-shift-schedules--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-shift-schedules--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-shift-schedules--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-shift-schedules--id-" data-method="PUT"
      data-path="api/shift-schedules/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-shift-schedules--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-shift-schedules--id-"
                    onclick="tryItOut('PUTapi-shift-schedules--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-shift-schedules--id-"
                    onclick="cancelTryOut('PUTapi-shift-schedules--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-shift-schedules--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/shift-schedules/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/shift-schedules/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-shift-schedules--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-shift-schedules--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-shift-schedules--id-"
               value="4"
               data-component="url">
    <br>
<p>The ID of the shift schedule. Example: <code>4</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>month</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="month"                data-endpoint="PUTapi-shift-schedules--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year"                data-endpoint="PUTapi-shift-schedules--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>created_by</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="created_by"                data-endpoint="PUTapi-shift-schedules--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>updated_by</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="updated_by"                data-endpoint="PUTapi-shift-schedules--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>departement_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="departement_id"                data-endpoint="PUTapi-shift-schedules--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the departments table. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-shift-schedules--id-">DELETE api/shift-schedules/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-shift-schedules--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/shift-schedules/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shift-schedules/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-shift-schedules--id-">
</span>
<span id="execution-results-DELETEapi-shift-schedules--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-shift-schedules--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-shift-schedules--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-shift-schedules--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-shift-schedules--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-shift-schedules--id-" data-method="DELETE"
      data-path="api/shift-schedules/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-shift-schedules--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-shift-schedules--id-"
                    onclick="tryItOut('DELETEapi-shift-schedules--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-shift-schedules--id-"
                    onclick="cancelTryOut('DELETEapi-shift-schedules--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-shift-schedules--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/shift-schedules/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-shift-schedules--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-shift-schedules--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-shift-schedules--id-"
               value="4"
               data-component="url">
    <br>
<p>The ID of the shift schedule. Example: <code>4</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-shift-schedules--id--details">GET api/shift-schedules/{id}/details</h2>

<p>
</p>



<span id="example-requests-GETapi-shift-schedules--id--details">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/shift-schedules/4/details" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shift-schedules/4/details"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-shift-schedules--id--details">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Data shift schedule tidak ditemukan.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-shift-schedules--id--details" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-shift-schedules--id--details"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shift-schedules--id--details"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-shift-schedules--id--details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shift-schedules--id--details">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-shift-schedules--id--details" data-method="GET"
      data-path="api/shift-schedules/{id}/details"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-shift-schedules--id--details', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-shift-schedules--id--details"
                    onclick="tryItOut('GETapi-shift-schedules--id--details');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-shift-schedules--id--details"
                    onclick="cancelTryOut('GETapi-shift-schedules--id--details');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-shift-schedules--id--details"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/shift-schedules/{id}/details</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-shift-schedules--id--details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-shift-schedules--id--details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-shift-schedules--id--details"
               value="4"
               data-component="url">
    <br>
<p>The ID of the shift schedule. Example: <code>4</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-shift-schedule-details">GET api/shift-schedule-details</h2>

<p>
</p>



<span id="example-requests-GETapi-shift-schedule-details">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/shift-schedule-details" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shift-schedule-details"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-shift-schedule-details">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;List data shift schedule detail.&quot;,
        &quot;datas&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: 63,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 1,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;employee&quot;: {
                        &quot;id&quot;: 1,
                        &quot;nip&quot;: &quot;199205142023052004&quot;,
                        &quot;nik&quot;: &quot;3276010101402004&quot;,
                        &quot;full_name&quot;: &quot;Rina Amalia&quot;,
                        &quot;gender&quot;: &quot;female&quot;,
                        &quot;birth_place&quot;: &quot;Surabaya&quot;,
                        &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                        &quot;address&quot;: &quot;Perum Permata Biru Blok C-05&quot;,
                        &quot;phone_number&quot;: &quot;85744556677&quot;,
                        &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
                        &quot;photo&quot;: null,
                        &quot;hire_date&quot;: &quot;2026-03-10&quot;,
                        &quot;employee_status&quot;: &quot;active&quot;,
                        &quot;position_id&quot;: 1,
                        &quot;department_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;
                    },
                    &quot;shift&quot;: {
                        &quot;id&quot;: 1,
                        &quot;shift_name&quot;: &quot;Pagi&quot;,
                        &quot;start_time&quot;: &quot;07:00:00&quot;,
                        &quot;end_time&quot;: &quot;15:00:00&quot;,
                        &quot;description&quot;: &quot;Shift pagi untuk pelayanan utama&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;
                    },
                    &quot;shift_schedule&quot;: {
                        &quot;id&quot;: 4,
                        &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                        &quot;created_by&quot;: &quot;Fasterino&quot;,
                        &quot;updated_by&quot;: &quot;&quot;,
                        &quot;departement_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;
                    }
                },
                {
                    &quot;id&quot;: 64,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-02&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 2,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;employee&quot;: {
                        &quot;id&quot;: 1,
                        &quot;nip&quot;: &quot;199205142023052004&quot;,
                        &quot;nik&quot;: &quot;3276010101402004&quot;,
                        &quot;full_name&quot;: &quot;Rina Amalia&quot;,
                        &quot;gender&quot;: &quot;female&quot;,
                        &quot;birth_place&quot;: &quot;Surabaya&quot;,
                        &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                        &quot;address&quot;: &quot;Perum Permata Biru Blok C-05&quot;,
                        &quot;phone_number&quot;: &quot;85744556677&quot;,
                        &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
                        &quot;photo&quot;: null,
                        &quot;hire_date&quot;: &quot;2026-03-10&quot;,
                        &quot;employee_status&quot;: &quot;active&quot;,
                        &quot;position_id&quot;: 1,
                        &quot;department_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;
                    },
                    &quot;shift&quot;: {
                        &quot;id&quot;: 2,
                        &quot;shift_name&quot;: &quot;Sore&quot;,
                        &quot;start_time&quot;: &quot;15:00:00&quot;,
                        &quot;end_time&quot;: &quot;23:00:00&quot;,
                        &quot;description&quot;: &quot;Shift sore untuk pelayanan lanjutan&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;
                    },
                    &quot;shift_schedule&quot;: {
                        &quot;id&quot;: 4,
                        &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                        &quot;created_by&quot;: &quot;Fasterino&quot;,
                        &quot;updated_by&quot;: &quot;&quot;,
                        &quot;departement_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;
                    }
                },
                {
                    &quot;id&quot;: 65,
                    &quot;is_off&quot;: 1,
                    &quot;schedule_date&quot;: &quot;2026-03-03&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: null,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;employee&quot;: {
                        &quot;id&quot;: 1,
                        &quot;nip&quot;: &quot;199205142023052004&quot;,
                        &quot;nik&quot;: &quot;3276010101402004&quot;,
                        &quot;full_name&quot;: &quot;Rina Amalia&quot;,
                        &quot;gender&quot;: &quot;female&quot;,
                        &quot;birth_place&quot;: &quot;Surabaya&quot;,
                        &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                        &quot;address&quot;: &quot;Perum Permata Biru Blok C-05&quot;,
                        &quot;phone_number&quot;: &quot;85744556677&quot;,
                        &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
                        &quot;photo&quot;: null,
                        &quot;hire_date&quot;: &quot;2026-03-10&quot;,
                        &quot;employee_status&quot;: &quot;active&quot;,
                        &quot;position_id&quot;: 1,
                        &quot;department_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;
                    },
                    &quot;shift&quot;: null,
                    &quot;shift_schedule&quot;: {
                        &quot;id&quot;: 4,
                        &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                        &quot;created_by&quot;: &quot;Fasterino&quot;,
                        &quot;updated_by&quot;: &quot;&quot;,
                        &quot;departement_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;
                    }
                },
                {
                    &quot;id&quot;: 66,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-04&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 1,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;employee&quot;: {
                        &quot;id&quot;: 1,
                        &quot;nip&quot;: &quot;199205142023052004&quot;,
                        &quot;nik&quot;: &quot;3276010101402004&quot;,
                        &quot;full_name&quot;: &quot;Rina Amalia&quot;,
                        &quot;gender&quot;: &quot;female&quot;,
                        &quot;birth_place&quot;: &quot;Surabaya&quot;,
                        &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                        &quot;address&quot;: &quot;Perum Permata Biru Blok C-05&quot;,
                        &quot;phone_number&quot;: &quot;85744556677&quot;,
                        &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
                        &quot;photo&quot;: null,
                        &quot;hire_date&quot;: &quot;2026-03-10&quot;,
                        &quot;employee_status&quot;: &quot;active&quot;,
                        &quot;position_id&quot;: 1,
                        &quot;department_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;
                    },
                    &quot;shift&quot;: {
                        &quot;id&quot;: 1,
                        &quot;shift_name&quot;: &quot;Pagi&quot;,
                        &quot;start_time&quot;: &quot;07:00:00&quot;,
                        &quot;end_time&quot;: &quot;15:00:00&quot;,
                        &quot;description&quot;: &quot;Shift pagi untuk pelayanan utama&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;
                    },
                    &quot;shift_schedule&quot;: {
                        &quot;id&quot;: 4,
                        &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                        &quot;created_by&quot;: &quot;Fasterino&quot;,
                        &quot;updated_by&quot;: &quot;&quot;,
                        &quot;departement_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;
                    }
                },
                {
                    &quot;id&quot;: 67,
                    &quot;is_off&quot;: 1,
                    &quot;schedule_date&quot;: &quot;2026-03-05&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: null,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;employee&quot;: {
                        &quot;id&quot;: 1,
                        &quot;nip&quot;: &quot;199205142023052004&quot;,
                        &quot;nik&quot;: &quot;3276010101402004&quot;,
                        &quot;full_name&quot;: &quot;Rina Amalia&quot;,
                        &quot;gender&quot;: &quot;female&quot;,
                        &quot;birth_place&quot;: &quot;Surabaya&quot;,
                        &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                        &quot;address&quot;: &quot;Perum Permata Biru Blok C-05&quot;,
                        &quot;phone_number&quot;: &quot;85744556677&quot;,
                        &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
                        &quot;photo&quot;: null,
                        &quot;hire_date&quot;: &quot;2026-03-10&quot;,
                        &quot;employee_status&quot;: &quot;active&quot;,
                        &quot;position_id&quot;: 1,
                        &quot;department_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;
                    },
                    &quot;shift&quot;: null,
                    &quot;shift_schedule&quot;: {
                        &quot;id&quot;: 4,
                        &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                        &quot;created_by&quot;: &quot;Fasterino&quot;,
                        &quot;updated_by&quot;: &quot;&quot;,
                        &quot;departement_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;
                    }
                },
                {
                    &quot;id&quot;: 68,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-06&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 1,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;employee&quot;: {
                        &quot;id&quot;: 1,
                        &quot;nip&quot;: &quot;199205142023052004&quot;,
                        &quot;nik&quot;: &quot;3276010101402004&quot;,
                        &quot;full_name&quot;: &quot;Rina Amalia&quot;,
                        &quot;gender&quot;: &quot;female&quot;,
                        &quot;birth_place&quot;: &quot;Surabaya&quot;,
                        &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                        &quot;address&quot;: &quot;Perum Permata Biru Blok C-05&quot;,
                        &quot;phone_number&quot;: &quot;85744556677&quot;,
                        &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
                        &quot;photo&quot;: null,
                        &quot;hire_date&quot;: &quot;2026-03-10&quot;,
                        &quot;employee_status&quot;: &quot;active&quot;,
                        &quot;position_id&quot;: 1,
                        &quot;department_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;
                    },
                    &quot;shift&quot;: {
                        &quot;id&quot;: 1,
                        &quot;shift_name&quot;: &quot;Pagi&quot;,
                        &quot;start_time&quot;: &quot;07:00:00&quot;,
                        &quot;end_time&quot;: &quot;15:00:00&quot;,
                        &quot;description&quot;: &quot;Shift pagi untuk pelayanan utama&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;
                    },
                    &quot;shift_schedule&quot;: {
                        &quot;id&quot;: 4,
                        &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                        &quot;created_by&quot;: &quot;Fasterino&quot;,
                        &quot;updated_by&quot;: &quot;&quot;,
                        &quot;departement_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;
                    }
                },
                {
                    &quot;id&quot;: 69,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-07&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 2,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;employee&quot;: {
                        &quot;id&quot;: 1,
                        &quot;nip&quot;: &quot;199205142023052004&quot;,
                        &quot;nik&quot;: &quot;3276010101402004&quot;,
                        &quot;full_name&quot;: &quot;Rina Amalia&quot;,
                        &quot;gender&quot;: &quot;female&quot;,
                        &quot;birth_place&quot;: &quot;Surabaya&quot;,
                        &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                        &quot;address&quot;: &quot;Perum Permata Biru Blok C-05&quot;,
                        &quot;phone_number&quot;: &quot;85744556677&quot;,
                        &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
                        &quot;photo&quot;: null,
                        &quot;hire_date&quot;: &quot;2026-03-10&quot;,
                        &quot;employee_status&quot;: &quot;active&quot;,
                        &quot;position_id&quot;: 1,
                        &quot;department_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;
                    },
                    &quot;shift&quot;: {
                        &quot;id&quot;: 2,
                        &quot;shift_name&quot;: &quot;Sore&quot;,
                        &quot;start_time&quot;: &quot;15:00:00&quot;,
                        &quot;end_time&quot;: &quot;23:00:00&quot;,
                        &quot;description&quot;: &quot;Shift sore untuk pelayanan lanjutan&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;
                    },
                    &quot;shift_schedule&quot;: {
                        &quot;id&quot;: 4,
                        &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                        &quot;created_by&quot;: &quot;Fasterino&quot;,
                        &quot;updated_by&quot;: &quot;&quot;,
                        &quot;departement_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;
                    }
                },
                {
                    &quot;id&quot;: 70,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-08&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 1,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;employee&quot;: {
                        &quot;id&quot;: 1,
                        &quot;nip&quot;: &quot;199205142023052004&quot;,
                        &quot;nik&quot;: &quot;3276010101402004&quot;,
                        &quot;full_name&quot;: &quot;Rina Amalia&quot;,
                        &quot;gender&quot;: &quot;female&quot;,
                        &quot;birth_place&quot;: &quot;Surabaya&quot;,
                        &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                        &quot;address&quot;: &quot;Perum Permata Biru Blok C-05&quot;,
                        &quot;phone_number&quot;: &quot;85744556677&quot;,
                        &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
                        &quot;photo&quot;: null,
                        &quot;hire_date&quot;: &quot;2026-03-10&quot;,
                        &quot;employee_status&quot;: &quot;active&quot;,
                        &quot;position_id&quot;: 1,
                        &quot;department_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;
                    },
                    &quot;shift&quot;: {
                        &quot;id&quot;: 1,
                        &quot;shift_name&quot;: &quot;Pagi&quot;,
                        &quot;start_time&quot;: &quot;07:00:00&quot;,
                        &quot;end_time&quot;: &quot;15:00:00&quot;,
                        &quot;description&quot;: &quot;Shift pagi untuk pelayanan utama&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;
                    },
                    &quot;shift_schedule&quot;: {
                        &quot;id&quot;: 4,
                        &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                        &quot;created_by&quot;: &quot;Fasterino&quot;,
                        &quot;updated_by&quot;: &quot;&quot;,
                        &quot;departement_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;
                    }
                },
                {
                    &quot;id&quot;: 71,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-09&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 3,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;employee&quot;: {
                        &quot;id&quot;: 1,
                        &quot;nip&quot;: &quot;199205142023052004&quot;,
                        &quot;nik&quot;: &quot;3276010101402004&quot;,
                        &quot;full_name&quot;: &quot;Rina Amalia&quot;,
                        &quot;gender&quot;: &quot;female&quot;,
                        &quot;birth_place&quot;: &quot;Surabaya&quot;,
                        &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                        &quot;address&quot;: &quot;Perum Permata Biru Blok C-05&quot;,
                        &quot;phone_number&quot;: &quot;85744556677&quot;,
                        &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
                        &quot;photo&quot;: null,
                        &quot;hire_date&quot;: &quot;2026-03-10&quot;,
                        &quot;employee_status&quot;: &quot;active&quot;,
                        &quot;position_id&quot;: 1,
                        &quot;department_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;
                    },
                    &quot;shift&quot;: {
                        &quot;id&quot;: 3,
                        &quot;shift_name&quot;: &quot;Malam&quot;,
                        &quot;start_time&quot;: &quot;23:00:00&quot;,
                        &quot;end_time&quot;: &quot;07:00:00&quot;,
                        &quot;description&quot;: &quot;Shift sore untuk pelayanan 24 jam&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;
                    },
                    &quot;shift_schedule&quot;: {
                        &quot;id&quot;: 4,
                        &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                        &quot;created_by&quot;: &quot;Fasterino&quot;,
                        &quot;updated_by&quot;: &quot;&quot;,
                        &quot;departement_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;
                    }
                },
                {
                    &quot;id&quot;: 72,
                    &quot;is_off&quot;: 0,
                    &quot;schedule_date&quot;: &quot;2026-03-10&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;shift_id&quot;: 3,
                    &quot;shift_schedule_id&quot;: 4,
                    &quot;created_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T06:46:57.000000Z&quot;,
                    &quot;employee&quot;: {
                        &quot;id&quot;: 1,
                        &quot;nip&quot;: &quot;199205142023052004&quot;,
                        &quot;nik&quot;: &quot;3276010101402004&quot;,
                        &quot;full_name&quot;: &quot;Rina Amalia&quot;,
                        &quot;gender&quot;: &quot;female&quot;,
                        &quot;birth_place&quot;: &quot;Surabaya&quot;,
                        &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                        &quot;address&quot;: &quot;Perum Permata Biru Blok C-05&quot;,
                        &quot;phone_number&quot;: &quot;85744556677&quot;,
                        &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
                        &quot;photo&quot;: null,
                        &quot;hire_date&quot;: &quot;2026-03-10&quot;,
                        &quot;employee_status&quot;: &quot;active&quot;,
                        &quot;position_id&quot;: 1,
                        &quot;department_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;
                    },
                    &quot;shift&quot;: {
                        &quot;id&quot;: 3,
                        &quot;shift_name&quot;: &quot;Malam&quot;,
                        &quot;start_time&quot;: &quot;23:00:00&quot;,
                        &quot;end_time&quot;: &quot;07:00:00&quot;,
                        &quot;description&quot;: &quot;Shift sore untuk pelayanan 24 jam&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:39:15.000000Z&quot;
                    },
                    &quot;shift_schedule&quot;: {
                        &quot;id&quot;: 4,
                        &quot;schedule_date&quot;: &quot;2026-03-01&quot;,
                        &quot;created_by&quot;: &quot;Fasterino&quot;,
                        &quot;updated_by&quot;: &quot;&quot;,
                        &quot;departement_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-29T06:46:56.000000Z&quot;
                    }
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/shift-schedule-details?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 7,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/shift-schedule-details?page=7&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/shift-schedule-details?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;page&quot;: 1,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/shift-schedule-details?page=2&quot;,
                    &quot;label&quot;: &quot;2&quot;,
                    &quot;page&quot;: 2,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/shift-schedule-details?page=3&quot;,
                    &quot;label&quot;: &quot;3&quot;,
                    &quot;page&quot;: 3,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/shift-schedule-details?page=4&quot;,
                    &quot;label&quot;: &quot;4&quot;,
                    &quot;page&quot;: 4,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/shift-schedule-details?page=5&quot;,
                    &quot;label&quot;: &quot;5&quot;,
                    &quot;page&quot;: 5,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/shift-schedule-details?page=6&quot;,
                    &quot;label&quot;: &quot;6&quot;,
                    &quot;page&quot;: 6,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/shift-schedule-details?page=7&quot;,
                    &quot;label&quot;: &quot;7&quot;,
                    &quot;page&quot;: 7,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/shift-schedule-details?page=2&quot;,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;page&quot;: 2,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: &quot;http://localhost:8000/api/shift-schedule-details?page=2&quot;,
            &quot;path&quot;: &quot;http://localhost:8000/api/shift-schedule-details&quot;,
            &quot;per_page&quot;: 10,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 10,
            &quot;total&quot;: 61
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-shift-schedule-details" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-shift-schedule-details"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shift-schedule-details"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-shift-schedule-details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shift-schedule-details">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-shift-schedule-details" data-method="GET"
      data-path="api/shift-schedule-details"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-shift-schedule-details', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-shift-schedule-details"
                    onclick="tryItOut('GETapi-shift-schedule-details');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-shift-schedule-details"
                    onclick="cancelTryOut('GETapi-shift-schedule-details');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-shift-schedule-details"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/shift-schedule-details</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-shift-schedule-details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-shift-schedule-details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-shift-schedule-details">POST api/shift-schedule-details</h2>

<p>
</p>



<span id="example-requests-POSTapi-shift-schedule-details">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/shift-schedule-details" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shift-schedule-details"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-shift-schedule-details">
</span>
<span id="execution-results-POSTapi-shift-schedule-details" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-shift-schedule-details"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-shift-schedule-details"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-shift-schedule-details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-shift-schedule-details">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-shift-schedule-details" data-method="POST"
      data-path="api/shift-schedule-details"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-shift-schedule-details', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-shift-schedule-details"
                    onclick="tryItOut('POSTapi-shift-schedule-details');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-shift-schedule-details"
                    onclick="cancelTryOut('POSTapi-shift-schedule-details');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-shift-schedule-details"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/shift-schedule-details</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-shift-schedule-details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-shift-schedule-details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-shift-schedule-details--id-">GET api/shift-schedule-details/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-shift-schedule-details--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/shift-schedule-details/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shift-schedule-details/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-shift-schedule-details--id-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Data shift schedule detail tidak ditemukan.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-shift-schedule-details--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-shift-schedule-details--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shift-schedule-details--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-shift-schedule-details--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shift-schedule-details--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-shift-schedule-details--id-" data-method="GET"
      data-path="api/shift-schedule-details/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-shift-schedule-details--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-shift-schedule-details--id-"
                    onclick="tryItOut('GETapi-shift-schedule-details--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-shift-schedule-details--id-"
                    onclick="cancelTryOut('GETapi-shift-schedule-details--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-shift-schedule-details--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/shift-schedule-details/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-shift-schedule-details--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-shift-schedule-details--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-shift-schedule-details--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the shift schedule detail. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-shift-schedule-details--id-">PUT api/shift-schedule-details/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-shift-schedule-details--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/shift-schedule-details/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"employee_id\": 16,
    \"departement_id\": 16,
    \"shift_id\": 16,
    \"shift_schedule_id\": 16,
    \"is_off\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shift-schedule-details/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "employee_id": 16,
    "departement_id": 16,
    "shift_id": 16,
    "shift_schedule_id": 16,
    "is_off": false
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-shift-schedule-details--id-">
</span>
<span id="execution-results-PUTapi-shift-schedule-details--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-shift-schedule-details--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-shift-schedule-details--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-shift-schedule-details--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-shift-schedule-details--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-shift-schedule-details--id-" data-method="PUT"
      data-path="api/shift-schedule-details/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-shift-schedule-details--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-shift-schedule-details--id-"
                    onclick="tryItOut('PUTapi-shift-schedule-details--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-shift-schedule-details--id-"
                    onclick="cancelTryOut('PUTapi-shift-schedule-details--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-shift-schedule-details--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/shift-schedule-details/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/shift-schedule-details/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-shift-schedule-details--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-shift-schedule-details--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-shift-schedule-details--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the shift schedule detail. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>employee_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="employee_id"                data-endpoint="PUTapi-shift-schedule-details--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the employees table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>departement_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="departement_id"                data-endpoint="PUTapi-shift-schedule-details--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the departments table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shift_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="shift_id"                data-endpoint="PUTapi-shift-schedule-details--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the shifts table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shift_schedule_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="shift_schedule_id"                data-endpoint="PUTapi-shift-schedule-details--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the shift_schedules table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_off</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-shift-schedule-details--id-" style="display: none">
            <input type="radio" name="is_off"
                   value="true"
                   data-endpoint="PUTapi-shift-schedule-details--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-shift-schedule-details--id-" style="display: none">
            <input type="radio" name="is_off"
                   value="false"
                   data-endpoint="PUTapi-shift-schedule-details--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-shift-schedule-details--id-">DELETE api/shift-schedule-details/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-shift-schedule-details--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/shift-schedule-details/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/shift-schedule-details/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-shift-schedule-details--id-">
</span>
<span id="execution-results-DELETEapi-shift-schedule-details--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-shift-schedule-details--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-shift-schedule-details--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-shift-schedule-details--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-shift-schedule-details--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-shift-schedule-details--id-" data-method="DELETE"
      data-path="api/shift-schedule-details/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-shift-schedule-details--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-shift-schedule-details--id-"
                    onclick="tryItOut('DELETEapi-shift-schedule-details--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-shift-schedule-details--id-"
                    onclick="cancelTryOut('DELETEapi-shift-schedule-details--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-shift-schedule-details--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/shift-schedule-details/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-shift-schedule-details--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-shift-schedule-details--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-shift-schedule-details--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the shift schedule detail. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-leave-types">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-leave-types">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/leave-types" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/leave-types"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-leave-types">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;List data leave type.&quot;,
        &quot;datas&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;leave_type_name&quot;: &quot;sick&quot;,
                    &quot;max_days&quot;: 30,
                    &quot;created_at&quot;: &quot;2026-03-28T04:38:43.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:38:43.000000Z&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;leave_type_name&quot;: &quot;Marriage&quot;,
                    &quot;max_days&quot;: 2,
                    &quot;created_at&quot;: &quot;2026-03-28T04:38:43.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:38:43.000000Z&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;leave_type_name&quot;: &quot;Maternity and Paternity&quot;,
                    &quot;max_days&quot;: 90,
                    &quot;created_at&quot;: &quot;2026-03-28T04:38:43.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:38:43.000000Z&quot;
                },
                {
                    &quot;id&quot;: 4,
                    &quot;leave_type_name&quot;: &quot;Bereavement &quot;,
                    &quot;max_days&quot;: 90,
                    &quot;created_at&quot;: &quot;2026-03-28T04:38:43.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T04:38:43.000000Z&quot;
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/leave-types?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/leave-types?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/leave-types?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;page&quot;: 1,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/leave-types&quot;,
            &quot;per_page&quot;: 10,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 4,
            &quot;total&quot;: 4
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-leave-types" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-leave-types"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-leave-types"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-leave-types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-leave-types">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-leave-types" data-method="GET"
      data-path="api/leave-types"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-leave-types', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-leave-types"
                    onclick="tryItOut('GETapi-leave-types');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-leave-types"
                    onclick="cancelTryOut('GETapi-leave-types');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-leave-types"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/leave-types</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-leave-types"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-leave-types"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-leave-types">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-leave-types">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/leave-types" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"leave_type_name\": \"b\",
    \"max_days\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/leave-types"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "leave_type_name": "b",
    "max_days": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-leave-types">
</span>
<span id="execution-results-POSTapi-leave-types" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-leave-types"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-leave-types"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-leave-types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-leave-types">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-leave-types" data-method="POST"
      data-path="api/leave-types"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-leave-types', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-leave-types"
                    onclick="tryItOut('POSTapi-leave-types');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-leave-types"
                    onclick="cancelTryOut('POSTapi-leave-types');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-leave-types"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/leave-types</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-leave-types"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-leave-types"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>leave_type_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="leave_type_name"                data-endpoint="POSTapi-leave-types"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>max_days</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="max_days"                data-endpoint="POSTapi-leave-types"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-leave-types--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-leave-types--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/leave-types/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/leave-types/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-leave-types--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;Detail data leave type.&quot;,
        &quot;datas&quot;: {
            &quot;id&quot;: 1,
            &quot;leave_type_name&quot;: &quot;sick&quot;,
            &quot;max_days&quot;: 30,
            &quot;created_at&quot;: &quot;2026-03-28T04:38:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-03-28T04:38:43.000000Z&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-leave-types--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-leave-types--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-leave-types--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-leave-types--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-leave-types--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-leave-types--id-" data-method="GET"
      data-path="api/leave-types/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-leave-types--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-leave-types--id-"
                    onclick="tryItOut('GETapi-leave-types--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-leave-types--id-"
                    onclick="cancelTryOut('GETapi-leave-types--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-leave-types--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/leave-types/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-leave-types--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-leave-types--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-leave-types--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the leave type. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-leave-types--id-">Show the form for editing the specified resource.</h2>

<p>
</p>



<span id="example-requests-PUTapi-leave-types--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/leave-types/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"leave_type_name\": \"b\",
    \"max_days\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/leave-types/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "leave_type_name": "b",
    "max_days": 16
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-leave-types--id-">
</span>
<span id="execution-results-PUTapi-leave-types--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-leave-types--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-leave-types--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-leave-types--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-leave-types--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-leave-types--id-" data-method="PUT"
      data-path="api/leave-types/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-leave-types--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-leave-types--id-"
                    onclick="tryItOut('PUTapi-leave-types--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-leave-types--id-"
                    onclick="cancelTryOut('PUTapi-leave-types--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-leave-types--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/leave-types/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/leave-types/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-leave-types--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-leave-types--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-leave-types--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the leave type. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>leave_type_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="leave_type_name"                data-endpoint="PUTapi-leave-types--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>max_days</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="max_days"                data-endpoint="PUTapi-leave-types--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-leave-types--id-">DELETE api/leave-types/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-leave-types--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/leave-types/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/leave-types/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-leave-types--id-">
</span>
<span id="execution-results-DELETEapi-leave-types--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-leave-types--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-leave-types--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-leave-types--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-leave-types--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-leave-types--id-" data-method="DELETE"
      data-path="api/leave-types/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-leave-types--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-leave-types--id-"
                    onclick="tryItOut('DELETEapi-leave-types--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-leave-types--id-"
                    onclick="cancelTryOut('DELETEapi-leave-types--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-leave-types--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/leave-types/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-leave-types--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-leave-types--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-leave-types--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the leave type. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-users">GET api/users</h2>

<p>
</p>



<span id="example-requests-GETapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;List data users.&quot;,
        &quot;datas&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Fasterino&quot;,
                    &quot;email&quot;: &quot;rinofaster89@gmail.com&quot;,
                    &quot;password&quot;: &quot;$2y$12$Ot48VzJ.i2QhnTBR3Zb.HOXPdMpKWwqoIKyngVYiCcUqnFUHlPHC2&quot;,
                    &quot;is_active&quot;: 1,
                    &quot;last_login_at&quot;: &quot;2026-04-01 16:38:12&quot;,
                    &quot;employee_id&quot;: 3,
                    &quot;device_id&quot;: &quot;ffb08aec-f210-4e5b-9263-930cf1f42c95&quot;,
                    &quot;role_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2026-03-28T04:52:09.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-04-01T09:38:12.000000Z&quot;,
                    &quot;employee&quot;: {
                        &quot;id&quot;: 3,
                        &quot;nip&quot;: &quot;199402152022031001&quot;,
                        &quot;nik&quot;: &quot;3276010101402005&quot;,
                        &quot;full_name&quot;: &quot;Fasterino Rafael&quot;,
                        &quot;gender&quot;: &quot;male&quot;,
                        &quot;birth_place&quot;: &quot;Kediri&quot;,
                        &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                        &quot;address&quot;: &quot;JL. Betet Bawang, kediri, Jawa Timur&quot;,
                        &quot;phone_number&quot;: &quot;899506027877&quot;,
                        &quot;email&quot;: &quot;rinofaster89@gmail.com&quot;,
                        &quot;photo&quot;: null,
                        &quot;hire_date&quot;: &quot;2026-03-19&quot;,
                        &quot;employee_status&quot;: &quot;active&quot;,
                        &quot;position_id&quot;: 5,
                        &quot;department_id&quot;: 6,
                        &quot;created_at&quot;: &quot;2026-03-28T04:42:53.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:42:53.000000Z&quot;
                    },
                    &quot;role&quot;: {
                        &quot;id&quot;: 2,
                        &quot;role_name&quot;: &quot;HR Admin&quot;,
                        &quot;description&quot;: &quot;Mengelola data karyawan dan data kepegawaian Rumah Sakit.&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:39:06.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:39:06.000000Z&quot;
                    }
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Rina&quot;,
                    &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
                    &quot;password&quot;: &quot;$2y$12$meQgSbRJoJVbxqw4BSWh8eSCEAHF551bADyZc3R8b92Qn/6Vlyovy&quot;,
                    &quot;is_active&quot;: 1,
                    &quot;last_login_at&quot;: &quot;2026-03-28 12:37:31&quot;,
                    &quot;employee_id&quot;: 1,
                    &quot;device_id&quot;: &quot;700a9adc-6388-41c3-b931-3df9bee2ebc2&quot;,
                    &quot;role_id&quot;: 3,
                    &quot;created_at&quot;: &quot;2026-03-28T04:52:25.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T14:15:00.000000Z&quot;,
                    &quot;employee&quot;: {
                        &quot;id&quot;: 1,
                        &quot;nip&quot;: &quot;199205142023052004&quot;,
                        &quot;nik&quot;: &quot;3276010101402004&quot;,
                        &quot;full_name&quot;: &quot;Rina Amalia&quot;,
                        &quot;gender&quot;: &quot;female&quot;,
                        &quot;birth_place&quot;: &quot;Surabaya&quot;,
                        &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                        &quot;address&quot;: &quot;Perum Permata Biru Blok C-05&quot;,
                        &quot;phone_number&quot;: &quot;85744556677&quot;,
                        &quot;email&quot;: &quot;rina.amalia@workmail.id&quot;,
                        &quot;photo&quot;: null,
                        &quot;hire_date&quot;: &quot;2026-03-10&quot;,
                        &quot;employee_status&quot;: &quot;active&quot;,
                        &quot;position_id&quot;: 1,
                        &quot;department_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:40:17.000000Z&quot;
                    },
                    &quot;role&quot;: {
                        &quot;id&quot;: 3,
                        &quot;role_name&quot;: &quot;Staff&quot;,
                        &quot;description&quot;: &quot;Mengelola data kehadiran dan data absensi pribadi karyawan.&quot;,
                        &quot;created_at&quot;: &quot;2026-03-28T04:39:06.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-03-28T04:39:06.000000Z&quot;
                    }
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/users?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/users?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/users?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;page&quot;: 1,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/users&quot;,
            &quot;per_page&quot;: 10,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 2,
            &quot;total&quot;: 2
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users" data-method="GET"
      data-path="api/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users"
                    onclick="tryItOut('GETapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users"
                    onclick="cancelTryOut('GETapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-users">POST api/users</h2>

<p>
</p>



<span id="example-requests-POSTapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"-0pBNvYgxw\",
    \"is_active\": false,
    \"employee_id\": 16,
    \"role_id\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "-0pBNvYgxw",
    "is_active": false,
    "employee_id": 16,
    "role_id": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-users">
</span>
<span id="execution-results-POSTapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-users" data-method="POST"
      data-path="api/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users"
                    onclick="tryItOut('POSTapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users"
                    onclick="cancelTryOut('POSTapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-users"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-users"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-users"
               value="-0pBNvYgxw"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>-0pBNvYgxw</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-users" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-users"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-users" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-users"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>employee_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="employee_id"                data-endpoint="POSTapi-users"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the employees table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="role_id"                data-endpoint="POSTapi-users"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the roles table. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-users--id-">GET api/users/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;Detail data user.&quot;,
        &quot;datas&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Fasterino&quot;,
            &quot;email&quot;: &quot;rinofaster89@gmail.com&quot;,
            &quot;password&quot;: &quot;$2y$12$Ot48VzJ.i2QhnTBR3Zb.HOXPdMpKWwqoIKyngVYiCcUqnFUHlPHC2&quot;,
            &quot;is_active&quot;: 1,
            &quot;last_login_at&quot;: &quot;2026-04-01 16:38:12&quot;,
            &quot;employee_id&quot;: 3,
            &quot;device_id&quot;: &quot;ffb08aec-f210-4e5b-9263-930cf1f42c95&quot;,
            &quot;role_id&quot;: 2,
            &quot;created_at&quot;: &quot;2026-03-28T04:52:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-04-01T09:38:12.000000Z&quot;,
            &quot;employee&quot;: {
                &quot;id&quot;: 3,
                &quot;nip&quot;: &quot;199402152022031001&quot;,
                &quot;nik&quot;: &quot;3276010101402005&quot;,
                &quot;full_name&quot;: &quot;Fasterino Rafael&quot;,
                &quot;gender&quot;: &quot;male&quot;,
                &quot;birth_place&quot;: &quot;Kediri&quot;,
                &quot;birth_date&quot;: &quot;2026-03-01&quot;,
                &quot;address&quot;: &quot;JL. Betet Bawang, kediri, Jawa Timur&quot;,
                &quot;phone_number&quot;: &quot;899506027877&quot;,
                &quot;email&quot;: &quot;rinofaster89@gmail.com&quot;,
                &quot;photo&quot;: null,
                &quot;hire_date&quot;: &quot;2026-03-19&quot;,
                &quot;employee_status&quot;: &quot;active&quot;,
                &quot;position_id&quot;: 5,
                &quot;department_id&quot;: 6,
                &quot;created_at&quot;: &quot;2026-03-28T04:42:53.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-03-28T04:42:53.000000Z&quot;
            }
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users--id-" data-method="GET"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users--id-"
                    onclick="tryItOut('GETapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users--id-"
                    onclick="cancelTryOut('GETapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-users--id-">PUT api/users/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"password\": \"]|{+-0pBNvYg\",
    \"is_active\": false,
    \"role_id\": 16,
    \"employee_id\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "password": "]|{+-0pBNvYg",
    "is_active": false,
    "role_id": 16,
    "employee_id": 16
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-users--id-">
</span>
<span id="execution-results-PUTapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-users--id-" data-method="PUT"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-users--id-"
                    onclick="tryItOut('PUTapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-users--id-"
                    onclick="cancelTryOut('PUTapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/users/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-users--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-users--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="PUTapi-users--id-"
               value="]|{+-0pBNvYg"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>]|{+-0pBNvYg</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-users--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="PUTapi-users--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-users--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="PUTapi-users--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="role_id"                data-endpoint="PUTapi-users--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the roles table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>employee_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="employee_id"                data-endpoint="PUTapi-users--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the employees table. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-users--id-">DELETE api/users/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-users--id-">
</span>
<span id="execution-results-DELETEapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-users--id-" data-method="DELETE"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-users--id-"
                    onclick="tryItOut('DELETEapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-users--id-"
                    onclick="cancelTryOut('DELETEapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-allowances">GET api/allowances</h2>

<p>
</p>



<span id="example-requests-GETapi-allowances">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/allowances" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/allowances"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-allowances">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;List data allowance.&quot;,
        &quot;datas&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;allowance_name&quot;: &quot;Tunjangan Jabatan&quot;,
                    &quot;amount&quot;: &quot;1500000.00&quot;,
                    &quot;description&quot;: &quot;Tunjangan tetap untuk level struktural atau manajerial&quot;,
                    &quot;created_at&quot;: &quot;2026-03-29T15:30:14.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T15:51:44.000000Z&quot;
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/allowances?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/allowances?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/allowances?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;page&quot;: 1,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/allowances&quot;,
            &quot;per_page&quot;: 10,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 1,
            &quot;total&quot;: 1
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-allowances" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-allowances"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-allowances"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-allowances" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-allowances">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-allowances" data-method="GET"
      data-path="api/allowances"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-allowances', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-allowances"
                    onclick="tryItOut('GETapi-allowances');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-allowances"
                    onclick="cancelTryOut('GETapi-allowances');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-allowances"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/allowances</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-allowances"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-allowances"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-allowances">POST api/allowances</h2>

<p>
</p>



<span id="example-requests-POSTapi-allowances">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/allowances" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"allowance_name\": \"b\",
    \"amount\": 39,
    \"description\": \"Animi quos velit et fugiat.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/allowances"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "allowance_name": "b",
    "amount": 39,
    "description": "Animi quos velit et fugiat."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-allowances">
</span>
<span id="execution-results-POSTapi-allowances" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-allowances"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-allowances"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-allowances" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-allowances">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-allowances" data-method="POST"
      data-path="api/allowances"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-allowances', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-allowances"
                    onclick="tryItOut('POSTapi-allowances');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-allowances"
                    onclick="cancelTryOut('POSTapi-allowances');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-allowances"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/allowances</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-allowances"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-allowances"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>allowance_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="allowance_name"                data-endpoint="POSTapi-allowances"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="amount"                data-endpoint="POSTapi-allowances"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-allowances"
               value="Animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Animi quos velit et fugiat.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-allowances--id-">GET api/allowances/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-allowances--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/allowances/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/allowances/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-allowances--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;Detail data allowance.&quot;,
        &quot;datas&quot;: {
            &quot;id&quot;: 1,
            &quot;allowance_name&quot;: &quot;Tunjangan Jabatan&quot;,
            &quot;amount&quot;: &quot;1500000.00&quot;,
            &quot;description&quot;: &quot;Tunjangan tetap untuk level struktural atau manajerial&quot;,
            &quot;created_at&quot;: &quot;2026-03-29T15:30:14.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-03-29T15:51:44.000000Z&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-allowances--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-allowances--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-allowances--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-allowances--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-allowances--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-allowances--id-" data-method="GET"
      data-path="api/allowances/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-allowances--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-allowances--id-"
                    onclick="tryItOut('GETapi-allowances--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-allowances--id-"
                    onclick="cancelTryOut('GETapi-allowances--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-allowances--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/allowances/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-allowances--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-allowances--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-allowances--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the allowance. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-allowances--id-">PUT api/allowances/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-allowances--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/allowances/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"allowance_name\": \"b\",
    \"amount\": 39,
    \"description\": \"Animi quos velit et fugiat.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/allowances/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "allowance_name": "b",
    "amount": 39,
    "description": "Animi quos velit et fugiat."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-allowances--id-">
</span>
<span id="execution-results-PUTapi-allowances--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-allowances--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-allowances--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-allowances--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-allowances--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-allowances--id-" data-method="PUT"
      data-path="api/allowances/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-allowances--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-allowances--id-"
                    onclick="tryItOut('PUTapi-allowances--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-allowances--id-"
                    onclick="cancelTryOut('PUTapi-allowances--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-allowances--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/allowances/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/allowances/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-allowances--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-allowances--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-allowances--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the allowance. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>allowance_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="allowance_name"                data-endpoint="PUTapi-allowances--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="amount"                data-endpoint="PUTapi-allowances--id-"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-allowances--id-"
               value="Animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Animi quos velit et fugiat.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-allowances--id-">DELETE api/allowances/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-allowances--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/allowances/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/allowances/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-allowances--id-">
</span>
<span id="execution-results-DELETEapi-allowances--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-allowances--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-allowances--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-allowances--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-allowances--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-allowances--id-" data-method="DELETE"
      data-path="api/allowances/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-allowances--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-allowances--id-"
                    onclick="tryItOut('DELETEapi-allowances--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-allowances--id-"
                    onclick="cancelTryOut('DELETEapi-allowances--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-allowances--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/allowances/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-allowances--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-allowances--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-allowances--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the allowance. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-deductions">GET api/deductions</h2>

<p>
</p>



<span id="example-requests-GETapi-deductions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/deductions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/deductions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-deductions">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;List data deduction.&quot;,
        &quot;datas&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;deduction_name&quot;: &quot;BPJS Kesehatan&quot;,
                    &quot;amount&quot;: &quot;50000.00&quot;,
                    &quot;description&quot;: &quot;Potongan 1% dari upah karyawan untuk jaminan kesehatan&quot;,
                    &quot;created_at&quot;: &quot;2026-03-29T15:50:37.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-29T15:50:37.000000Z&quot;
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/deductions?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/deductions?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/deductions?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;page&quot;: 1,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/deductions&quot;,
            &quot;per_page&quot;: 10,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 1,
            &quot;total&quot;: 1
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-deductions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-deductions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-deductions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-deductions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-deductions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-deductions" data-method="GET"
      data-path="api/deductions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-deductions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-deductions"
                    onclick="tryItOut('GETapi-deductions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-deductions"
                    onclick="cancelTryOut('GETapi-deductions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-deductions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/deductions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-deductions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-deductions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-deductions">POST api/deductions</h2>

<p>
</p>



<span id="example-requests-POSTapi-deductions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/deductions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"deduction_name\": \"b\",
    \"amount\": 39,
    \"description\": \"Animi quos velit et fugiat.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/deductions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "deduction_name": "b",
    "amount": 39,
    "description": "Animi quos velit et fugiat."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-deductions">
</span>
<span id="execution-results-POSTapi-deductions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-deductions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-deductions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-deductions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-deductions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-deductions" data-method="POST"
      data-path="api/deductions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-deductions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-deductions"
                    onclick="tryItOut('POSTapi-deductions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-deductions"
                    onclick="cancelTryOut('POSTapi-deductions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-deductions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/deductions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-deductions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-deductions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>deduction_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="deduction_name"                data-endpoint="POSTapi-deductions"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="amount"                data-endpoint="POSTapi-deductions"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-deductions"
               value="Animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Animi quos velit et fugiat.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-deductions--id-">GET api/deductions/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-deductions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/deductions/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/deductions/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-deductions--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;Detail data deduction.&quot;,
        &quot;datas&quot;: {
            &quot;id&quot;: 1,
            &quot;deduction_name&quot;: &quot;BPJS Kesehatan&quot;,
            &quot;amount&quot;: &quot;50000.00&quot;,
            &quot;description&quot;: &quot;Potongan 1% dari upah karyawan untuk jaminan kesehatan&quot;,
            &quot;created_at&quot;: &quot;2026-03-29T15:50:37.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-03-29T15:50:37.000000Z&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-deductions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-deductions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-deductions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-deductions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-deductions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-deductions--id-" data-method="GET"
      data-path="api/deductions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-deductions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-deductions--id-"
                    onclick="tryItOut('GETapi-deductions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-deductions--id-"
                    onclick="cancelTryOut('GETapi-deductions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-deductions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/deductions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-deductions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-deductions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-deductions--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the deduction. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-deductions--id-">PUT api/deductions/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-deductions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/deductions/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"deduction_name\": \"b\",
    \"amount\": 39,
    \"description\": \"Animi quos velit et fugiat.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/deductions/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "deduction_name": "b",
    "amount": 39,
    "description": "Animi quos velit et fugiat."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-deductions--id-">
</span>
<span id="execution-results-PUTapi-deductions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-deductions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-deductions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-deductions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-deductions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-deductions--id-" data-method="PUT"
      data-path="api/deductions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-deductions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-deductions--id-"
                    onclick="tryItOut('PUTapi-deductions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-deductions--id-"
                    onclick="cancelTryOut('PUTapi-deductions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-deductions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/deductions/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/deductions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-deductions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-deductions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-deductions--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the deduction. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>deduction_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="deduction_name"                data-endpoint="PUTapi-deductions--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="amount"                data-endpoint="PUTapi-deductions--id-"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-deductions--id-"
               value="Animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Animi quos velit et fugiat.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-deductions--id-">DELETE api/deductions/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-deductions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/deductions/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/deductions/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-deductions--id-">
</span>
<span id="execution-results-DELETEapi-deductions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-deductions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-deductions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-deductions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-deductions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-deductions--id-" data-method="DELETE"
      data-path="api/deductions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-deductions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-deductions--id-"
                    onclick="tryItOut('DELETEapi-deductions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-deductions--id-"
                    onclick="cancelTryOut('DELETEapi-deductions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-deductions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/deductions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-deductions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-deductions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-deductions--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the deduction. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-payrolls">GET api/payrolls</h2>

<p>
</p>



<span id="example-requests-GETapi-payrolls">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/payrolls" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/payrolls"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-payrolls">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Data masih kosong.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-payrolls" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-payrolls"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-payrolls"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-payrolls" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-payrolls">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-payrolls" data-method="GET"
      data-path="api/payrolls"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-payrolls', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-payrolls"
                    onclick="tryItOut('GETapi-payrolls');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-payrolls"
                    onclick="cancelTryOut('GETapi-payrolls');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-payrolls"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/payrolls</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-payrolls"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-payrolls"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-payrolls--id-">GET api/payrolls/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-payrolls--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/payrolls/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/payrolls/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-payrolls--id-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Data payroll tidak ditemukan.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-payrolls--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-payrolls--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-payrolls--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-payrolls--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-payrolls--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-payrolls--id-" data-method="GET"
      data-path="api/payrolls/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-payrolls--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-payrolls--id-"
                    onclick="tryItOut('GETapi-payrolls--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-payrolls--id-"
                    onclick="cancelTryOut('GETapi-payrolls--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-payrolls--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/payrolls/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-payrolls--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-payrolls--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-payrolls--id-"
               value="16"
               data-component="url">
    <br>
<p>The ID of the payroll. Example: <code>16</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-payroll-by-period">POST api/payroll-by-period</h2>

<p>
</p>



<span id="example-requests-POSTapi-payroll-by-period">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/payroll-by-period" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/payroll-by-period"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-payroll-by-period">
</span>
<span id="execution-results-POSTapi-payroll-by-period" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-payroll-by-period"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-payroll-by-period"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-payroll-by-period" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-payroll-by-period">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-payroll-by-period" data-method="POST"
      data-path="api/payroll-by-period"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-payroll-by-period', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-payroll-by-period"
                    onclick="tryItOut('POSTapi-payroll-by-period');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-payroll-by-period"
                    onclick="cancelTryOut('POSTapi-payroll-by-period');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-payroll-by-period"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/payroll-by-period</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-payroll-by-period"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-payroll-by-period"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-payroll-generates">POST api/payroll-generates</h2>

<p>
</p>



<span id="example-requests-POSTapi-payroll-generates">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/payroll-generates" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"employee_id\": \"architecto\",
    \"month\": 4,
    \"year\": 7,
    \"base_salary\": 16,
    \"allowances\": [
        {
            \"allowance_id\": \"architecto\",
            \"is_custom\": false,
            \"amount\": 16,
            \"name\": \"architecto\"
        }
    ],
    \"deductions\": [
        {
            \"deduction_id\": \"architecto\",
            \"is_custom\": true,
            \"amount\": 16,
            \"name\": \"architecto\"
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/payroll-generates"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "employee_id": "architecto",
    "month": 4,
    "year": 7,
    "base_salary": 16,
    "allowances": [
        {
            "allowance_id": "architecto",
            "is_custom": false,
            "amount": 16,
            "name": "architecto"
        }
    ],
    "deductions": [
        {
            "deduction_id": "architecto",
            "is_custom": true,
            "amount": 16,
            "name": "architecto"
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-payroll-generates">
</span>
<span id="execution-results-POSTapi-payroll-generates" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-payroll-generates"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-payroll-generates"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-payroll-generates" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-payroll-generates">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-payroll-generates" data-method="POST"
      data-path="api/payroll-generates"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-payroll-generates', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-payroll-generates"
                    onclick="tryItOut('POSTapi-payroll-generates');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-payroll-generates"
                    onclick="cancelTryOut('POSTapi-payroll-generates');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-payroll-generates"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/payroll-generates</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-payroll-generates"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-payroll-generates"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>employee_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="employee_id"                data-endpoint="POSTapi-payroll-generates"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the employees table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>month</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="month"                data-endpoint="POSTapi-payroll-generates"
               value="4"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 12. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year"                data-endpoint="POSTapi-payroll-generates"
               value="7"
               data-component="body">
    <br>
<p>Must be at least 2000. Must not be greater than 2100. Example: <code>7</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>base_salary</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="base_salary"                data-endpoint="POSTapi-payroll-generates"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>allowances</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>allowance_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="allowances.0.allowance_id"                data-endpoint="POSTapi-payroll-generates"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the allowances table. Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>is_custom</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-payroll-generates" style="display: none">
            <input type="radio" name="allowances.0.is_custom"
                   value="true"
                   data-endpoint="POSTapi-payroll-generates"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-payroll-generates" style="display: none">
            <input type="radio" name="allowances.0.is_custom"
                   value="false"
                   data-endpoint="POSTapi-payroll-generates"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="allowances.0.amount"                data-endpoint="POSTapi-payroll-generates"
               value="16"
               data-component="body">
    <br>
<p>This field is required when <code>allowances.*.is_custom</code> is <code>true</code>. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="allowances.0.name"                data-endpoint="POSTapi-payroll-generates"
               value="architecto"
               data-component="body">
    <br>
<p>This field is required when <code>allowances.*.is_custom</code> is <code>true</code>. Example: <code>architecto</code></p>
                    </div>
                                    </details>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>deductions</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>deduction_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="deductions.0.deduction_id"                data-endpoint="POSTapi-payroll-generates"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the deductions table. Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>is_custom</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-payroll-generates" style="display: none">
            <input type="radio" name="deductions.0.is_custom"
                   value="true"
                   data-endpoint="POSTapi-payroll-generates"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-payroll-generates" style="display: none">
            <input type="radio" name="deductions.0.is_custom"
                   value="false"
                   data-endpoint="POSTapi-payroll-generates"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="deductions.0.amount"                data-endpoint="POSTapi-payroll-generates"
               value="16"
               data-component="body">
    <br>
<p>This field is required when <code>deductions.*.is_custom</code> is <code>true</code>. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="deductions.0.name"                data-endpoint="POSTapi-payroll-generates"
               value="architecto"
               data-component="body">
    <br>
<p>This field is required when <code>deductions.*.is_custom</code> is <code>true</code>. Example: <code>architecto</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-attendance-settings">GET api/attendance-settings</h2>

<p>
</p>



<span id="example-requests-GETapi-attendance-settings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/attendance-settings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/attendance-settings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-attendance-settings">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;List data attendance setting.&quot;,
        &quot;datas&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;rs_name&quot;: &quot;Kantor Kediri Jaya&quot;,
                    &quot;latitude&quot;: &quot;-6.17539200&quot;,
                    &quot;longitude&quot;: &quot;106.82715300&quot;,
                    &quot;radius_meters&quot;: 50,
                    &quot;created_at&quot;: &quot;2026-03-28T05:08:15.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-03-28T05:08:15.000000Z&quot;
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/attendance-settings?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/attendance-settings?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/attendance-settings?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;page&quot;: 1,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;page&quot;: null,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/attendance-settings&quot;,
            &quot;per_page&quot;: 10,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 1,
            &quot;total&quot;: 1
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-attendance-settings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-attendance-settings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-attendance-settings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-attendance-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-attendance-settings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-attendance-settings" data-method="GET"
      data-path="api/attendance-settings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-attendance-settings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-attendance-settings"
                    onclick="tryItOut('GETapi-attendance-settings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-attendance-settings"
                    onclick="cancelTryOut('GETapi-attendance-settings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-attendance-settings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/attendance-settings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-attendance-settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-attendance-settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-attendance-settings">POST api/attendance-settings</h2>

<p>
</p>



<span id="example-requests-POSTapi-attendance-settings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/attendance-settings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"rs_name\": \"architecto\",
    \"latitude\": 4326.41688,
    \"longitude\": 4326.41688,
    \"radius_meters\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/attendance-settings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rs_name": "architecto",
    "latitude": 4326.41688,
    "longitude": 4326.41688,
    "radius_meters": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-attendance-settings">
</span>
<span id="execution-results-POSTapi-attendance-settings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-attendance-settings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-attendance-settings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-attendance-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-attendance-settings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-attendance-settings" data-method="POST"
      data-path="api/attendance-settings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-attendance-settings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-attendance-settings"
                    onclick="tryItOut('POSTapi-attendance-settings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-attendance-settings"
                    onclick="cancelTryOut('POSTapi-attendance-settings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-attendance-settings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/attendance-settings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-attendance-settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-attendance-settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rs_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rs_name"                data-endpoint="POSTapi-attendance-settings"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="latitude"                data-endpoint="POSTapi-attendance-settings"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="longitude"                data-endpoint="POSTapi-attendance-settings"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>radius_meters</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="radius_meters"                data-endpoint="POSTapi-attendance-settings"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-attendance-settings--id-">GET api/attendance-settings/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-attendance-settings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/attendance-settings/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/attendance-settings/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-attendance-settings--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;Detail data attendance setting.&quot;,
        &quot;datas&quot;: {
            &quot;id&quot;: 1,
            &quot;rs_name&quot;: &quot;Kantor Kediri Jaya&quot;,
            &quot;latitude&quot;: &quot;-6.17539200&quot;,
            &quot;longitude&quot;: &quot;106.82715300&quot;,
            &quot;radius_meters&quot;: 50,
            &quot;created_at&quot;: &quot;2026-03-28T05:08:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-03-28T05:08:15.000000Z&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-attendance-settings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-attendance-settings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-attendance-settings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-attendance-settings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-attendance-settings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-attendance-settings--id-" data-method="GET"
      data-path="api/attendance-settings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-attendance-settings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-attendance-settings--id-"
                    onclick="tryItOut('GETapi-attendance-settings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-attendance-settings--id-"
                    onclick="cancelTryOut('GETapi-attendance-settings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-attendance-settings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/attendance-settings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-attendance-settings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-attendance-settings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-attendance-settings--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the attendance setting. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-attendance-settings--id-">PUT api/attendance-settings/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-attendance-settings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/attendance-settings/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"rs_name\": \"architecto\",
    \"latitude\": 4326.41688,
    \"longitude\": 4326.41688,
    \"radius_meters\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/attendance-settings/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rs_name": "architecto",
    "latitude": 4326.41688,
    "longitude": 4326.41688,
    "radius_meters": 16
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-attendance-settings--id-">
</span>
<span id="execution-results-PUTapi-attendance-settings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-attendance-settings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-attendance-settings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-attendance-settings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-attendance-settings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-attendance-settings--id-" data-method="PUT"
      data-path="api/attendance-settings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-attendance-settings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-attendance-settings--id-"
                    onclick="tryItOut('PUTapi-attendance-settings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-attendance-settings--id-"
                    onclick="cancelTryOut('PUTapi-attendance-settings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-attendance-settings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/attendance-settings/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/attendance-settings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-attendance-settings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-attendance-settings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-attendance-settings--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the attendance setting. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rs_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rs_name"                data-endpoint="PUTapi-attendance-settings--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="latitude"                data-endpoint="PUTapi-attendance-settings--id-"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="longitude"                data-endpoint="PUTapi-attendance-settings--id-"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>radius_meters</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="radius_meters"                data-endpoint="PUTapi-attendance-settings--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-attendance-settings--id-">DELETE api/attendance-settings/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-attendance-settings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/attendance-settings/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/attendance-settings/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-attendance-settings--id-">
</span>
<span id="execution-results-DELETEapi-attendance-settings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-attendance-settings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-attendance-settings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-attendance-settings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-attendance-settings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-attendance-settings--id-" data-method="DELETE"
      data-path="api/attendance-settings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-attendance-settings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-attendance-settings--id-"
                    onclick="tryItOut('DELETEapi-attendance-settings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-attendance-settings--id-"
                    onclick="cancelTryOut('DELETEapi-attendance-settings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-attendance-settings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/attendance-settings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-attendance-settings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-attendance-settings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-attendance-settings--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the attendance setting. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-attendances">GET api/attendances</h2>

<p>
</p>



<span id="example-requests-GETapi-attendances">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/attendances" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/attendances"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-attendances">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-attendances" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-attendances"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-attendances"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-attendances" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-attendances">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-attendances" data-method="GET"
      data-path="api/attendances"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-attendances', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-attendances"
                    onclick="tryItOut('GETapi-attendances');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-attendances"
                    onclick="cancelTryOut('GETapi-attendances');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-attendances"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/attendances</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-attendances"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-attendances"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-check-in">POST api/check-in</h2>

<p>
</p>



<span id="example-requests-POSTapi-check-in">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/check-in" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"latitude\": 4326.41688,
    \"longitude\": 4326.41688,
    \"device_id\": \"architecto\",
    \"qr_payload\": \"architecto\",
    \"user_id\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/check-in"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "latitude": 4326.41688,
    "longitude": 4326.41688,
    "device_id": "architecto",
    "qr_payload": "architecto",
    "user_id": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-check-in">
</span>
<span id="execution-results-POSTapi-check-in" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-check-in"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-check-in"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-check-in" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-check-in">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-check-in" data-method="POST"
      data-path="api/check-in"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-check-in', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-check-in"
                    onclick="tryItOut('POSTapi-check-in');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-check-in"
                    onclick="cancelTryOut('POSTapi-check-in');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-check-in"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/check-in</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-check-in"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-check-in"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="latitude"                data-endpoint="POSTapi-check-in"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="longitude"                data-endpoint="POSTapi-check-in"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>device_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="device_id"                data-endpoint="POSTapi-check-in"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>qr_payload</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="qr_payload"                data-endpoint="POSTapi-check-in"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="POSTapi-check-in"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-check-out">POST api/check-out</h2>

<p>
</p>



<span id="example-requests-POSTapi-check-out">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/check-out" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"latitude\": 4326.41688,
    \"longitude\": 4326.41688,
    \"device_id\": \"architecto\",
    \"qr_payload\": \"architecto\",
    \"user_id\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/check-out"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "latitude": 4326.41688,
    "longitude": 4326.41688,
    "device_id": "architecto",
    "qr_payload": "architecto",
    "user_id": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-check-out">
</span>
<span id="execution-results-POSTapi-check-out" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-check-out"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-check-out"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-check-out" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-check-out">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-check-out" data-method="POST"
      data-path="api/check-out"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-check-out', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-check-out"
                    onclick="tryItOut('POSTapi-check-out');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-check-out"
                    onclick="cancelTryOut('POSTapi-check-out');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-check-out"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/check-out</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-check-out"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-check-out"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="latitude"                data-endpoint="POSTapi-check-out"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="longitude"                data-endpoint="POSTapi-check-out"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>device_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="device_id"                data-endpoint="POSTapi-check-out"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>qr_payload</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="qr_payload"                data-endpoint="POSTapi-check-out"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="POSTapi-check-out"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-summarise">POST api/summarise</h2>

<p>
</p>



<span id="example-requests-POSTapi-summarise">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/summarise" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"employee_id\": \"architecto\",
    \"month\": 4,
    \"year\": 7
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/summarise"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "employee_id": "architecto",
    "month": 4,
    "year": 7
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-summarise">
</span>
<span id="execution-results-POSTapi-summarise" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-summarise"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-summarise"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-summarise" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-summarise">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-summarise" data-method="POST"
      data-path="api/summarise"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-summarise', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-summarise"
                    onclick="tryItOut('POSTapi-summarise');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-summarise"
                    onclick="cancelTryOut('POSTapi-summarise');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-summarise"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/summarise</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-summarise"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-summarise"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>employee_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="employee_id"                data-endpoint="POSTapi-summarise"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the employees table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>month</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="month"                data-endpoint="POSTapi-summarise"
               value="4"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 12. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year"                data-endpoint="POSTapi-summarise"
               value="7"
               data-component="body">
    <br>
<p>Must be at least 2000. Must not be greater than 2100. Example: <code>7</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-dinamic-qr">GET api/dinamic-qr</h2>

<p>
</p>



<span id="example-requests-GETapi-dinamic-qr">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/dinamic-qr" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/dinamic-qr"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-dinamic-qr">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;qr_payload&quot;: &quot;b595bdb83b016bec4976b54a202e1cb9c0a723ad68d50b03c5a2bc4b0bd49985&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-dinamic-qr" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-dinamic-qr"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-dinamic-qr"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-dinamic-qr" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-dinamic-qr">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-dinamic-qr" data-method="GET"
      data-path="api/dinamic-qr"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-dinamic-qr', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-dinamic-qr"
                    onclick="tryItOut('GETapi-dinamic-qr');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-dinamic-qr"
                    onclick="cancelTryOut('GETapi-dinamic-qr');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-dinamic-qr"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/dinamic-qr</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-dinamic-qr"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-dinamic-qr"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-attendance-by-month">POST api/attendance-by-month</h2>

<p>
</p>



<span id="example-requests-POSTapi-attendance-by-month">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/attendance-by-month" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"month\": 4,
    \"year\": 22
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/attendance-by-month"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "month": 4,
    "year": 22
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-attendance-by-month">
</span>
<span id="execution-results-POSTapi-attendance-by-month" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-attendance-by-month"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-attendance-by-month"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-attendance-by-month" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-attendance-by-month">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-attendance-by-month" data-method="POST"
      data-path="api/attendance-by-month"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-attendance-by-month', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-attendance-by-month"
                    onclick="tryItOut('POSTapi-attendance-by-month');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-attendance-by-month"
                    onclick="cancelTryOut('POSTapi-attendance-by-month');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-attendance-by-month"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/attendance-by-month</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-attendance-by-month"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-attendance-by-month"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>month</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="month"                data-endpoint="POSTapi-attendance-by-month"
               value="4"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 12. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year"                data-endpoint="POSTapi-attendance-by-month"
               value="22"
               data-component="body">
    <br>
<p>Must be at least 2000. Must not be greater than 2100. Example: <code>22</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-leave-requests">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-leave-requests">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/leave-requests" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/leave-requests"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-leave-requests">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-leave-requests" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-leave-requests"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-leave-requests"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-leave-requests" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-leave-requests">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-leave-requests" data-method="GET"
      data-path="api/leave-requests"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-leave-requests', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-leave-requests"
                    onclick="tryItOut('GETapi-leave-requests');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-leave-requests"
                    onclick="cancelTryOut('GETapi-leave-requests');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-leave-requests"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/leave-requests</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-leave-requests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-leave-requests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-leave-requests">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-leave-requests">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/leave-requests" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"leave_type_id\": \"architecto\",
    \"start_date\": \"2026-04-01T16:45:58\",
    \"end_date\": \"2026-04-01T16:45:58\",
    \"reason\": \"n\",
    \"status\": \"rejected\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/leave-requests"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "leave_type_id": "architecto",
    "start_date": "2026-04-01T16:45:58",
    "end_date": "2026-04-01T16:45:58",
    "reason": "n",
    "status": "rejected"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-leave-requests">
</span>
<span id="execution-results-POSTapi-leave-requests" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-leave-requests"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-leave-requests"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-leave-requests" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-leave-requests">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-leave-requests" data-method="POST"
      data-path="api/leave-requests"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-leave-requests', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-leave-requests"
                    onclick="tryItOut('POSTapi-leave-requests');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-leave-requests"
                    onclick="cancelTryOut('POSTapi-leave-requests');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-leave-requests"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/leave-requests</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-leave-requests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-leave-requests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>leave_type_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="leave_type_id"                data-endpoint="POSTapi-leave-requests"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the leave_types table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="POSTapi-leave-requests"
               value="2026-04-01T16:45:58"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-04-01T16:45:58</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_date"                data-endpoint="POSTapi-leave-requests"
               value="2026-04-01T16:45:58"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-04-01T16:45:58</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reason</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reason"                data-endpoint="POSTapi-leave-requests"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-leave-requests"
               value="rejected"
               data-component="body">
    <br>
<p>Example: <code>rejected</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>approved</code></li> <li><code>rejected</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-leave-requests--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-leave-requests--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/leave-requests/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/leave-requests/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-leave-requests--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-leave-requests--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-leave-requests--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-leave-requests--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-leave-requests--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-leave-requests--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-leave-requests--id-" data-method="GET"
      data-path="api/leave-requests/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-leave-requests--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-leave-requests--id-"
                    onclick="tryItOut('GETapi-leave-requests--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-leave-requests--id-"
                    onclick="cancelTryOut('GETapi-leave-requests--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-leave-requests--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/leave-requests/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-leave-requests--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-leave-requests--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-leave-requests--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the leave request. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-leave-requests--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-leave-requests--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/leave-requests/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"start_date\": \"2026-04-01T16:45:58\",
    \"end_date\": \"2026-04-01T16:45:58\",
    \"reason\": \"b\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/leave-requests/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "start_date": "2026-04-01T16:45:58",
    "end_date": "2026-04-01T16:45:58",
    "reason": "b"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-leave-requests--id-">
</span>
<span id="execution-results-PUTapi-leave-requests--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-leave-requests--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-leave-requests--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-leave-requests--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-leave-requests--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-leave-requests--id-" data-method="PUT"
      data-path="api/leave-requests/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-leave-requests--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-leave-requests--id-"
                    onclick="tryItOut('PUTapi-leave-requests--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-leave-requests--id-"
                    onclick="cancelTryOut('PUTapi-leave-requests--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-leave-requests--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/leave-requests/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/leave-requests/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-leave-requests--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-leave-requests--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-leave-requests--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the leave request. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>leave_type_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="leave_type_id"                data-endpoint="PUTapi-leave-requests--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the leave_types table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="PUTapi-leave-requests--id-"
               value="2026-04-01T16:45:58"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-04-01T16:45:58</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_date"                data-endpoint="PUTapi-leave-requests--id-"
               value="2026-04-01T16:45:58"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-04-01T16:45:58</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reason</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reason"                data-endpoint="PUTapi-leave-requests--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-leave-requests--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-leave-requests--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/leave-requests/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/leave-requests/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-leave-requests--id-">
</span>
<span id="execution-results-DELETEapi-leave-requests--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-leave-requests--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-leave-requests--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-leave-requests--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-leave-requests--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-leave-requests--id-" data-method="DELETE"
      data-path="api/leave-requests/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-leave-requests--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-leave-requests--id-"
                    onclick="tryItOut('DELETEapi-leave-requests--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-leave-requests--id-"
                    onclick="cancelTryOut('DELETEapi-leave-requests--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-leave-requests--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/leave-requests/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-leave-requests--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-leave-requests--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-leave-requests--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the leave request. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-leave-requests--id--approve">PUT api/leave-requests/{id}/approve</h2>

<p>
</p>



<span id="example-requests-PUTapi-leave-requests--id--approve">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/leave-requests/architecto/approve" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/leave-requests/architecto/approve"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-leave-requests--id--approve">
</span>
<span id="execution-results-PUTapi-leave-requests--id--approve" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-leave-requests--id--approve"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-leave-requests--id--approve"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-leave-requests--id--approve" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-leave-requests--id--approve">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-leave-requests--id--approve" data-method="PUT"
      data-path="api/leave-requests/{id}/approve"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-leave-requests--id--approve', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-leave-requests--id--approve"
                    onclick="tryItOut('PUTapi-leave-requests--id--approve');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-leave-requests--id--approve"
                    onclick="cancelTryOut('PUTapi-leave-requests--id--approve');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-leave-requests--id--approve"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/leave-requests/{id}/approve</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-leave-requests--id--approve"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-leave-requests--id--approve"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-leave-requests--id--approve"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the leave request. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-leave-requests--id--reject">PUT api/leave-requests/{id}/reject</h2>

<p>
</p>



<span id="example-requests-PUTapi-leave-requests--id--reject">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/leave-requests/architecto/reject" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/leave-requests/architecto/reject"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-leave-requests--id--reject">
</span>
<span id="execution-results-PUTapi-leave-requests--id--reject" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-leave-requests--id--reject"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-leave-requests--id--reject"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-leave-requests--id--reject" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-leave-requests--id--reject">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-leave-requests--id--reject" data-method="PUT"
      data-path="api/leave-requests/{id}/reject"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-leave-requests--id--reject', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-leave-requests--id--reject"
                    onclick="tryItOut('PUTapi-leave-requests--id--reject');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-leave-requests--id--reject"
                    onclick="cancelTryOut('PUTapi-leave-requests--id--reject');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-leave-requests--id--reject"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/leave-requests/{id}/reject</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-leave-requests--id--reject"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-leave-requests--id--reject"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-leave-requests--id--reject"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the leave request. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-leave-request-by">GET api/leave-request/by</h2>

<p>
</p>



<span id="example-requests-GETapi-leave-request-by">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/leave-request/by" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/leave-request/by"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-leave-request-by">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-leave-request-by" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-leave-request-by"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-leave-request-by"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-leave-request-by" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-leave-request-by">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-leave-request-by" data-method="GET"
      data-path="api/leave-request/by"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-leave-request-by', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-leave-request-by"
                    onclick="tryItOut('GETapi-leave-request-by');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-leave-request-by"
                    onclick="cancelTryOut('GETapi-leave-request-by');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-leave-request-by"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/leave-request/by</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-leave-request-by"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-leave-request-by"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
