
<?php
session_start();
// checks if the user is logged in, as they must be logged in to use this functinality.
if($_SESSION['loggedIn'] == true) {

    ?>
    <html>
    <form action="../content/hireABikeValidation.php" method="post" enctype="multipart/form-data">

        <fieldset>
            <legend>Hire A Bike</legend>
            <table border="0">
                <tr>

                    <form method="POST" action=""
                </tr>
                From
                <select name="bikeFrom">
                    <option value="1">University North Quater</option>
                    <option value="2">University Libary</option>
                    <option value="3">Gunwarf Quays</option>
                    <option value="4">Portsmouth and Southsea Train Station</option>
                    <option value="5">Fratton Train Station</option>
                    <option value="6">Langstone University Halls</option>
                    <option value="7">Southsea Castle (Beach Front)</option>
                    <option value="8">St Marys Hospital</option>
                    <option value="9">University Park Building</option>
                </select>
                <br><br>
                To
                <select name="bikeTo">
                    <option value="1">University North Quater</option>
                    <option value="2">University Libary</option>
                    <option value="3">Gunwarf Quays</option>
                    <option value="4">Portsmouth and Southsea Train Station</option>
                    <option value="5">Fratton Train Station</option>
                    <option value="6">Langstone University Halls</option>
                    <option value="7">Southsea Castle (Beach Front)</option>
                    <option value="8">St Marys Hospital</option>
                    <option value="9">University Park Building</option>
                </select>

                <br></br>
                <br></br>

                Please select when you would like to hire a bike
                <br>
                <input type="checkbox" name="now" value="Yes"/>
                Hire now<br><br>
                If you do not wish to hire it now, please select when you wish to hire it.
                <br><br>
                <tr>
                    Hour
                    <select name="Hour">
                        <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                    </select>
                </tr>
                <tr>
                    Minute
                    <select name="Minute">
                        <option value="00">00</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>

                    </select>
                    <br></br>
                    Please input a date if you wish to reserve a bike
                    <label for="day"></label>
                    <div id="date2" class="datefield">
                        <input id="day" type="tel" maxlength="2" placeholder="DD" name="day"/> /
                        <input id="month" type="tel" maxlength="2" placeholder="MM" name="month"/>
                    </div>
                </tr>
                <br></br>
                <tr>
                    What type of bike would you like to hire?
                    <select name="bikeType">
                        <option value="Select">Select..</option>
                        <option value="1">Mountain</option>
                        <option value="2">Road</option>
                        <option value="3">BMX</option>
                        <option value="4">Dirt</option>
                        <option value="5">Sport</option>
                        <option value="6">Generic</option>
                    </select>
                </tr>
                <tr>
                    <td>
                        <input id="button" name="submit" value="Hire a Bike!"="" type="submit">
                    </td>
                </tr>
            </table>

        </fieldset>
    </form>
    </html>
    <?php
} else {
    header("Location: ../content/notLoggedIn.html");

}
?>
