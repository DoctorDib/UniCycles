<html>

<form action="hireABikeValidation.php" method="post" enctype="multipart/form-data">

<fieldset style="width:70%"><legend>Hire A Bike</legend>
    <table border="0">
        <tr>
            <form method="POST" action=""
    </tr>
        From
        <select name="From">
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
        <select name="To">
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
        Please select when you would like to hire a bike
        <br>
        <input type="checkbox" id="cbox1" value="checkbox"> Now<br>
        <tr>
            Hour
            <select name="Hour">
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
                <option value="24">24</option>
        <tr>
            Minute
            <select name="Minute">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
                <option value="60">60</option>

            </select>
            <br><br>
            <label for="day"></label>
            <div id="date2" class="datefield">
                <input id="day" type="tel" maxlength="2" placeholder="DD" name="day"/> /
                <input id="month" type="tel" maxlength="2" placeholder="MM" name="month"/>
            </div>
        </tr>
        <br><br>
        <tr>
What type of bike would you like to hire??
            <select name="bikeType"
                <option value="Generic">Generic</option>
                <option value="Mountain">Mountain</option>
                <option value="Road">Road</option>
                <option value="BMX">BMX</option>
                <option value="Dirt">Dirt</option>
                <option value="Sport">Sport</option>
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
