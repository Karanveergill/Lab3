<html>
<div>
    <form action="results.php" method="post" enctype="multipart/form-data">

        <div>
            <label>Username</label>
            <input type="text" name="username" />
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" />
        </div>
        <div>
            <label>Student Number</label>
            <input type="text" name="student_number" />
        </div><br>
        <div>
            <label>Select Gender</label><br>
            <input type="radio" id="male" name="male" value="male">
            <label>Male</label><br>
            <input type="radio" id="female" name="female" value="female">
            <label>Female</label><br>
            <input type="radio" id="otherx" name="otherx" value="otherx">
            <label>Prefer not to answer</label><br><br>
        </div>
        <div>
            <label>Computer languages you've studied</label><br>
            <input type="checkbox" name="check_list[]" value="c++">
            <label>C++</label><br>
            <input type="checkbox" name="check_list[]" value="c#">
            <label>C#</label><br>
            <input type="checkbox" name="check_list[]" value="javascript">
            <label>JavaScript</label><br>
            <input type="checkbox" name="check_list[]" value="java">
            <label>Java</label><br>
            <input type="checkbox" name="check_list[]" value="perl">
            <label>Perl</label><br>
            <input type="checkbox" name="check_list[]" value="php">
            <label>PHP</label><br>
            <input type="checkbox" name="check_list[]" value="python">
            <label>Python</label><br><br>
        </div>


        <div>
            <input type="submit" value="Submit" />
        </div>
    </form>
</div>

</html>