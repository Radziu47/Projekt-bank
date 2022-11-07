<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPKO - bankowość elektroni</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="header">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIzLjAuNCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMC8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9UUi8yMDAxL1JFQy1TVkctMjAwMTA5MDQvRFREL3N2ZzEwLmR0ZCIgWyA8IUVOVElUWSBuc19leHRlbmQgImh0dHA6Ly9ucy5hZG9iZS5jb20vRXh0ZW5zaWJpbGl0eS8xLjAvIj4KPCFFTlRJVFkgbnNfYWkgImh0dHA6Ly9ucy5hZG9iZS5jb20vQWRvYmVJbGx1c3RyYXRvci8xMC4wLyI+CjwhRU5USVRZIG5zX2dyYXBocyAiaHR0cDovL25zLmFkb2JlLmNvbS9HcmFwaHMvMS4wLyI+CjwhRU5USVRZIG5zX3ZhcnMgImh0dHA6Ly9ucy5hZG9iZS5jb20vVmFyaWFibGVzLzEuMC8iPgo8IUVOVElUWSBuc19pbXJlcCAiaHR0cDovL25zLmFkb2JlLmNvbS9JbWFnZVJlcGxhY2VtZW50LzEuMC8iPgo8IUVOVElUWSBuc19zZncgImh0dHA6Ly9ucy5hZG9iZS5jb20vU2F2ZUZvcldlYi8xLjAvIj4KPCFFTlRJVFkgbnNfY3VzdG9tICJodHRwOi8vbnMuYWRvYmUuY29tL0dlbmVyaWNDdXN0b21OYW1lc3BhY2UvMS4wLyI+CjwhRU5USVRZIG5zX2Fkb2JlX3hwYXRoICJodHRwOi8vbnMuYWRvYmUuY29tL1hQYXRoLzEuMC8iPgpdPgo8c3ZnCiAgdmVyc2lvbj0iMS4wIgogIGlkPSJpUEtPLWxvZ28tc3ZnIgogIHhtbG5zOng9IiZuc19leHRlbmQ7IgogIHhtbG5zOmk9IiZuc19haTsiCiAgeG1sbnM6Z3JhcGg9IiZuc19ncmFwaHM7IgogIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIKICB4PSIwcHgiCiAgeT0iMHB4IgogIHZpZXdCb3g9IjAgMCA1NiA0OCIKICBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1NiA0OCIKICB4bWw6c3BhY2U9InByZXNlcnZlIgo+CiAgPG1ldGFkYXRhPgogICAgPHNmdyB4bWxucz0iJm5zX3NmdzsiPgogICAgICA8c2xpY2VzPjwvc2xpY2VzPgogICAgICA8c2xpY2VTb3VyY2VCb3VuZHMKICAgICAgICBib3R0b21MZWZ0T3JpZ2luPSJ0cnVlIgogICAgICAgIGhlaWdodD0iNDgiCiAgICAgICAgd2lkdGg9IjU2IgogICAgICAgIHg9IjkuNTQyIgogICAgICAgIHk9IjQuMDQyIgogICAgICA+PC9zbGljZVNvdXJjZUJvdW5kcz4KICAgIDwvc2Z3PgogIDwvbWV0YWRhdGE+CiAgPHJlY3QKICAgIGlkPSJiZyIKICAgIHg9IjAuMDQyIgogICAgeT0iLTAuMDQyIgogICAgZmlsbD0iI0ZGRkZGRiIKICAgIGZpbGwtb3BhY2l0eT0iMCIKICAgIHdpZHRoPSI1NiIKICAgIGhlaWdodD0iNDgiCiAgLz4KICA8bGluZWFyR3JhZGllbnQKICAgIGlkPSJTVkdJRF8xXyIKICAgIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIgogICAgeDE9IjQuOTc3NyIKICAgIHkxPSIyMC45MjQ4IgogICAgeDI9IjQuOTc3NyIKICAgIHkyPSIzMy42NzkxIgogID4KICAgIDxzdG9wIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6IzAwNEM5QSIgLz4KICAgIDxzdG9wIG9mZnNldD0iMC4xNDMiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDQ5OTQiIC8+CiAgICA8c3RvcCBvZmZzZXQ9IjAuMzMiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMTNGODQiIC8+CiAgICA8c3RvcCBvZmZzZXQ9IjAuNTQyIiBzdHlsZT0ic3RvcC1jb2xvcjojMDMzMDY5IiAvPgogICAgPHN0b3Agb2Zmc2V0PSIwLjc3MSIgc3R5bGU9InN0b3AtY29sb3I6IzA1MUE0MyIgLz4KICAgIDxzdG9wIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzA3MDAxNiIgLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxwYXRoCiAgICBmaWxsPSJ1cmwoI1NWR0lEXzFfKSIKICAgIGQ9Ik03LjIyNiwyMC44MzRjLTIuNTcxLDAtNC41NDEsMS42OTctNC41NDEsMy44MDdsMCwwdjkuMDM3aDQuNTg3TDcuMjI2LDIwLjgzNHoiCiAgLz4KICA8ZWxsaXBzZQogICAgaWQ9IkVsbGlwc2VfNF8xXyIKICAgIGZpbGw9IiNFNDIwMkMiCiAgICBjeD0iNS4wNyIKICAgIGN5PSIxNy4wMjgiCiAgICByeD0iMy4wMjgiCiAgICByeT0iMy4wMjgiCiAgLz4KICA8cGF0aAogICAgaWQ9IlBhdGhfN18xXyIKICAgIGQ9Ik0yMy41NTYsMjEuMDE5YzAsMy40NDEtMi4zODUsNi4wMDktNi40NjgsNi4wMDljLTAuNzA4LDAuMDA2LTEuNDE0LTAuMDU2LTIuMTEtMC4xODR2Ni45MjloLTIuMjAyVjE5LjMyMQoJYzAtMy4xMTksMS44MzUtMy42Nyw0LjM1Ny0zLjY3QzIxLjU4MywxNS42NTEsMjMuNTU2LDE3Ljk0NSwyMy41NTYsMjEuMDE5eiBNMTcuMjcyLDE2LjkzN2MtMS41NTksMC0yLjI0OCwwLjU1MS0yLjI0OCwyLjIwMnY2LjM3NgoJYzAuNTcxLDAuMTMsMS4xNTYsMC4xOTEsMS43NDMsMC4xODRjMy4xMTksMCw0LjQ5Ni0yLjAxOSw0LjQ5Ni00LjY3OUMyMS4yNjMsMTguNzIzLDIwLjExNiwxNi45MzcsMTcuMjcyLDE2LjkzN3oiCiAgLz4KICA8cGF0aAogICAgaWQ9IlBhdGhfOF8xXyIKICAgIGQ9Ik0yOC4zMjYsMjUuMDU1djguNjdoLTIuMTU2VjE1LjkyNmgyLjE1NnY4LjM0OWw1LjczNC02LjY5N2MxLjEwMS0xLjE5MywyLjE1Ni0xLjY5NywzLjIxNC0xLjY5NwoJYzAuMjc3LDAuMDA1LDAuNTU0LDAuMDM2LDAuODI2LDAuMDkxTDMyLDIyLjg1M2MtMC42MDYsMC43NjQtMS40NDMsMS4zMTEtMi4zODUsMS41NTl2MC41MDRjMS4wNTYsMC4zMiwxLjk4NiwwLjk2MSwyLjY2MSwxLjgzNQoJbDYuMjM5LDYuOTcyYy0wLjI2NCwwLjA5OC0wLjU0NCwwLjE0NC0wLjgyNiwwLjEzOGMtMS4zLTAuMDQtMi41MTMtMC42NjItMy4zMDQtMS42OTVMMjguMzI2LDI1LjA1NXoiCiAgLz4KICA8cGF0aAogICAgaWQ9IlBhdGhfOV8xXyIKICAgIGQ9Ik00Ni40LDM0Yy00LjQ0OSwwLTcuNzA2LTMuNTc4LTcuNzA2LTkuMzU3YzAtNS4yMywzLjI1Ny05LjEyOSw3LjcwNi05LjEyOXM3LjY2MSwzLjk0NSw3LjY2MSw5LjEyOQoJQzU0LjA2MSwzMC4zMyw1MC44NDksMzQsNDYuNCwzNHogTTQ2LjMwOCwxNi45ODFjLTMuMTY1LDAtNS4yMjksMy4yMTQtNS4yMjksNy40MjljMCw0LjkwOSwyLjA2NCw4LjE2NSw1LjM2Nyw4LjE2NQoJYzMuMTY1LDAsNS4yMjktMy4yNTcsNS4yMjktNy42NjFDNTEuNzIxLDIwLjIzOSw0OS42NTcsMTYuOTgxLDQ2LjMwOCwxNi45ODF6IgogIC8+Cjwvc3ZnPgo=" alt="" id="logo">

            <select name="Lang" id="lang">
                <option value="polish">Polski (PL)</option>
                <option value="english">English (EN)</option>
                <option value="ukrainian">Українська (UA)</option>
            </select>
    </section>

    <section id="middle">
        <div id="loging">
            <form action="" method="post" id="container2">
                <h1 id="zal">Zaloguj się</h1>
                <h6 id="noAcc"><a href="#">Nie masz konta?</a></h6>
                <input type="text" name="login" id="login">
                <h6 id="help"><a href="#">Pomoc w logowaniu</a></h6>
                <input type="submit" value="Wyslij" id="wyslij">
            </form>
        </div>
        <div>
        <div id="money">
                <img src="graphic\LoginGraphic\pieniądze.png" alt="moni" id="money">
                <h1 id="wezOnline">Weź online pierwszą pożyczkę. RRSO 9,82%</h1>
                <p id="NaDowol">Na dowolne wydatki</p>
                <button id="MoneyButt">Sprawdź Propozycje</button>
        </div>
        </div>
    </section>
</body>
</html>

<?php

$_SESSION["login"] = $_POST["login"];

echo $_SESSION["login"];

?>