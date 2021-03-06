<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('Formulario/img/logo.jpeg')}}">

        <!-- <title>Formulario para cadastro de Clientes</title> -->

        <style>
            * {
    margin: 0;
    padding: 0;
    font-family: Avant Garde, Avantgarde, Century Gothic, CenturyGothic, AppleGothic, sans-serif;
}
body {
    padding-top: 55px;
    background-color: #f8f8f8;
}
::-webkit-input-placeholder {
    color: Silver;
    font-size: 14px;
    font-weight: 600;
}
:-moz-placeholder {
    /* Firefox 18- */
    
    color: black;
    font-size: 17px;
    font-weight: 600;
}
::-moz-placeholder {
    /* Firefox 19+ */
    
    color: black;
    font-size: 17px;
    font-weight: 600;
}
:-ms-input-placeholder {
    color: black;
    font-size: 17px;
    font-weight: 600;
}
.hide {
    display: none;
}
.fiform {
    display: table;
    width: 90%;
    max-width: 400px;
    min-width: 300px;
    margin: auto;
    padding: 30px 0;
    padding-top: 0;
    margin-top: 40px;
}
.fiform h1 {
    text-align: center;
}
.fi {
    display: table-row;
    text-align: left;
    height: 100px;
}
input,
select,
textarea {
    display: block;
    margin: auto;
    width: 100%;
    height: 35px;
    border: 0;
    border-bottom: solid 1px;
    font-size: 18px;
    background-color: #f8f8f8;
}
input[type="submit"] {
    height: 70px;
}
input:disabled {
    background-color: #f0f0f0;
}
button,
input[type="submit"] {
    border: 0;
    cursor: pointer;
    background-color: #61CE70;
    color: #ffffff;
}
input:focus,
input:active,
select:focus,
select:active,
textarea:focus,
textarea:active {
    outline: 0;
    border-bottom: solid 1px rgb(0, 188, 215);
}
input:-webkit-autofill {
    box-shadow: 0 0 0px 1000px #f8f8f8 inset;
}
textarea {
    height: 100px;
}
select[multiple] {
    height: auto !important;
    margin-bottom: 20px;
    border-bottom: solid 1px #000;
}
select {
    text-transform: capitalize;
}
label {
    display: table-cell;
    vertical-align: middle;
    font-size: 18px;
}
label span {
    font-size: 17px;
    font-weight: 600;
    color: #46b3e2;
    transition: opacity 0.5s;
}
input[type="checkbox"],
input[type="radio"] {
    display: none;
}
input[type="checkbox"] + span,
input[type="radio"] + span {
    cursor: pointer;
}
input[type="checkbox"] + span:before,
input[type="radio"] + span:before {
    content: url('http://jijnasu.in/wp-content/uploads/2016/10/checkbox-checked-false.png');
    margin-right: 5px;
    position: relative;
    top: 1px;
}
input[type="checkbox"] + span:before {
    content: url('http://jijnasu.in/wp-content/uploads/2016/10/checkbox-checked-false.png');
}
input[type="radio"] + span:before {
    content: url('http://jijnasu.in/wp-content/uploads/2016/10/radio-checked-false.png');
}
input[type="checkbox"]:checked + span:before,
input[type="radio"]:checked + span:before {
    animation: tick 180ms;
    display: inline-block;
}
input[type="checkbox"]:checked + span:before {
    content: url('http://jijnasu.in/wp-content/uploads/2016/10/checkbox-checked-true.png');
}
input[type="radio"]:checked + span:before {
    content: url('http://jijnasu.in/wp-content/uploads/2016/10/radio-checked-true.png');
}
input[type="checkbox"]:disabled + span:before {
    content: url('http://jijnasu.in/wp-content/uploads/2016/10/checkbox-disabled.png');
}
input[type="radio"]:disabled + span:before {
    content: url('http://jijnasu.in/wp-content/uploads/2016/10/radio-disabled.png');
}
@keyframes tick {
    0% {
        transform: scale(0);
    }
    90% {
        transform: scale(1.3);
    }
    100% {
        transform: scale(1);
    }
}

input:invalid {
    border-color: #FF0000;
}

input:valid {
    border-color: #61CE70;
}

input:focus {
    border-color: #46b3e2 !important;
}

h1 {
    color: #61CE70;
    padding-bottom: 50px;
}





        </style> 

    </head>
 <body>
<form id="add_form" action="/registro" method="post" class="fiform" >
            @csrf
       <h1>GEOCAR</h1>
        <!-- <img src="/img/logo.jpeg" width=200 height=200> -->
    
	<div class="fi" >
		<label for="inputnome_proprietario">
            <span>Nome do Proprietario</span>
            <input type="text" id="inputnome_proprietario" name="nome_proprietario" placeholder="Ex: GeoSmart Tech Solution / Jose Teles" required minlength="2" maxlength="50" />
        </label>
	</div>
    <div class="fi" >
		<label for="inputtelefone_proprietario">
			<span>Celular do Proprietario</span>
			<input type="text" id="inputtelefone_proprietario" name="telefone_proprietario" placeholder="Ex: 820001234" required maxlength="9" />
		</label>
	</div>
    <div class="fi" >
		<label for="inputtelefone">
			<span>Telefone do Fixo</span>
			<input type="text" id="inputtelefone" name="telefone_fixo" placeholder="Ex: 21780955" maxlength="8"/>
		</label>
	</div>
    <div class="fi" >
		<label for="inputemail">
			<span>Email do Proprietario</span>
			<input type="text" id="inputemail" name="email_" placeholder="Ex: geosmart@outlook.com" maxlength="50" />
		</label>
	</div>
    <div class="fi" >
		<label  for="inputcidade">
			<span>Cidade / Vila</span>
			<input type="text" id="inputcidade" name="cidade" placeholder="Ex: Nacala Porto" required minlength="2" maxlength="50" />
		</label>
	</div>
    <div class="fi" >
		<label for="inputtipo">
			<span>Tipo de Veiculo</span>
			<input type="text" id="inputtipo" name="tipo" required placeholder="Ex: Autocarro" minlength="2" maxlength="50" />
		</label>
	</div>
    <div class="fi" >
		<label for="inputmatricula">
			<span>Matricula</span>
			<input type="text" id="inputmatricula" name="matricula" placeholder="Ex: ADF 600 MP" required minlength="2" maxlength="50" />
		</label>
	</div>
    <div class="fi" >
		<label for="inputzona">
			<span>Zona de Maior Circulacao</span>
			<input type="text" id="inputzona" name="zona" placeholder="Ex: Matola" required minlength="2" maxlength="50" />
		</label>
	</div>
    <div class="fi" >
		<label for="inputnome_motorista">
			<span>Nome do Motorista</span>
			<input type="text" id="inputnome_motorista" name="nome_motorista" placeholder="Ex: Juliao Nhosta" required minlength="2" maxlength="50" />
		</label>
	</div>
    <div class="fi" >
		<label for="inputtelefone_motorista">
			<span>Celular do Motorista</span>
			<input type="text" id="inputtelefone_motorista" name="telefone_motorista" placeholder="Ex: 870994576" required maxlength="9" />
		</label>
	</div>
    <div class="fi" >
		<label for="inputinicio">
			<span>Inicio de Circulacao</span>
			<input type="text" id="inputinicio" name="inicio" placeholder="Ex: 4:30 H" required minlength="2" maxlength="8"/>
		</label>
	</div>
    <div class="fi" >
		<label for="inputfim">
			<span>Fim de Circulacao</span>
			<input type="text" id="inputfim" name="fim" placeholder="Ex: 19:00 H" required  minlength="2" maxlength="8"/>
		</label>
	</div>
    <div class="fi" >
		<label for="inputtipo_gps">
			<span>Tipo de GPS</span>
			<input type="text" id="inputtipo_gps" name="tipo_gps" placeholder="Ex: GT 06" required minlength="2" maxlength="50" />
		</label>
	</div>
    <div class="fi" >
		<label for="inputimei">
			<span>IMEI do GPS</span>
			<input type="text" id="inputimei" name="imei_gps" placeholder="Ex: 123456654321789" required maxlength="15" />
		</label>
	</div>
    <div class="fi" >
		<label for="inputsim">
			<span>SIM do GPS</span>
			<input type="text" id="inputsim" name="sim_gps" placeholder="Ex: 822769743" required maxlength="9" />
		</label>
	</div>
	<div class="fi" >
		<label for="inputbtn">
			<input id="inputbtn" type="submit" value="Enviar" id="submit" />
		</label>
	</div>
 </form>
</body>
</html>