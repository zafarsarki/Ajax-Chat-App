<?php

class form
{
    protected $action = null;
    protected $method = null;

    public function __construct($action, $method)
    {
        $this->action = $action;
        $this->method = $method;
    }
    public function set_action($action)
    {
        $this->action = $action;
    }
    public function set_method($method)
    {
        $this->method = $method;
    }
    public function get_action()
    {
        return $this->action;
    }
    public function get_method()
    {
        return $this->method;
    }

    public function login_form()
    {
?>
        <center>
            <fieldset style="width: 30%;">
                <legend>Login Here..!</legend>
                <table>
                    <form action="<?php echo $this->get_action()?>" method="<?php echo $this->get_method()?>">
                        <tr>
                            <td>Email:</td>
                            <td><input type="text" name="email" id="email_id"></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password" id="pass_id"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" id="pass" value="Login"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><a href="register.php">Register Here..</a></td>
                        </tr>
                    </form>
                </table>
            </fieldset>
        </center>
<?php
    }


    public function register_form()
    {
?>
        <center>
            <fieldset style="width: 30%;">
                <legend>Register Here..!</legend>
                <table>
                    <form action="<?php echo $this->get_action()?>" method="<?php echo $this->get_method()?>">
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" name="name" id="name_id"></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="text" name="email" id="email_id"></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password" id="pass_id"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" id="reg_btn" value="Register"></td>
                        </tr>
                    </form>
                </table>
            </fieldset>
        </center>
<?php
    }




}




?>