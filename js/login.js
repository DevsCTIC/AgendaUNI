function validarFoco() {
    document.frmLogin.log_usr_vc.focus();
}
function Salir()
{window.close();}
function Entrar() 
{document.frmLogin.action="Acceso.php";
document.frmLogin.method="post";
document.frmLogin.submit();}