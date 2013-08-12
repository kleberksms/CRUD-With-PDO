/**
 * @author Kleber
 */
$(document).ready(function() {

	$("#dataNascimento").mask("99/99/9999");
	$("#dataNascimento").change(function() {
		var date = $(this).val();
		var ardt = new Array;
		var ExpReg = new RegExp("(0[1-9]|1[0-9]|2[0-9]|3[0-1])/(0[1-9]|1[0-2])/(19[00-99]|2[000-999])");
		arrayDate = date.split('/');
		erro = false;
		if (date.search(ExpReg) !== 0) {
			erro = true;
		} else if (((ardt[1] == 4) || (ardt[1] == 6) || (ardt[1] == 9) || (ardt[1] == 11)) && (ardt[0] > 30))
			erro = true;
		else if (ardt[1] == 2) {
			if ((ardt[0] > 28) && ((ardt[2] % 4) != 0))
				erro = true;
			if ((ardt[0] > 29) && ((ardt[2] % 4) == 0))
				erro = true;
		}
		if (erro) {
			alert("DATA INVÁLIDA");
			return false;
		}
		return true;
	});

	$("#email").change(function() {
		var email = $(this).val();
		var er = new RegExp("^([A-Za-z0-9_]|\\-|\\.)+@(([A-Za-z0-9_]|\\-)+\\.)+[a-z]{2,4}$");

		if (email.search(er)) {
			$("#email").val("");
			alert("e-mail inválido");
		}
	});
	

});
