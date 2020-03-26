<!--/*************************************************************
**      MODAL Instrucciones                                     **
**************************************************************/-->
<div id="ex3" class="modal">
    <h2 class="modal-title">{{_i('Instrucciones de Uso')}}</h2>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <?php if(LaravelGettext::getLocale()=='es_ES'){ ?>
            <table class="table">
                <tr>
                    <td valign="top"><h2 class="text-primary font-weight-bold">1</h2></td>
                    <td class="inst_text" rowspan="3" valign="top"><p>Es de suma importancia ingresar los datos objetivos que conozca del paciente, siendo <strong>imprescindible</strong> completar los correspondientes datos como en el ejemplo siguiente:</p>
                        <ul>
                            <li>Nombres propios: (por ejemplo:María Dolores Amelia)</li>
                            <li> Apellido: (por ejemplo: Rodríguez)</li>
                            <li> Nombre con el que se identifica:(por ejemplo: Dolores)</li>
                            <li> Iniciales: la primer letra de cada uno de los nombres y apellidos (por ejemplo: MDAR, en este caso)</li>
                            <li> Fecha de Nacimiento: (por ejemplo:26 del 9 de 1986)</li>
                        </ul>
                        <p><strong>Nota</strong>: en algunas ocasiones la persona se identifica, no con alguno de sus nombres propios, sino con un "<strong>apodo</strong>" que reemplaza en importancia a su propio nombre. </p>
                        <p>En este caso, si dicho apodo, es lo <strong>suficientemente trascendental</strong> e <strong>históricmente</strong> <strong>notable</strong> para su identidad, serea anotado en el campo: "<strong>Nombre con el que se identifica</strong>" substituyendo al nombre propio. (por ejemplo si María Dolores Amelia Rodríguez fuese llamada "<strong>Piqui</strong>" por todos desde niña).</p></td>
                    <td inst_num="" valign="top"><h2 class="text-primary font-weight-bold">2</h2></td>
                    <td valign="top"><p>Los datos deben ser cargados en la planilla de consulta sin acentos o simbolos. Debe ingresarse el texto con las letras puras correspondientes (no agregar letras con ´, ¨, ^, ', `, ~, etc.).</p></td>
                </tr>
                <tr>
                    <td valign="top"> </td>
                    <td valign="top"><h2 class="text-primary font-weight-bold">3</h2></td>
                    <td valign="top">Una vez que haya ingresado todos los datos del paciente le solicitamos chequee la información ingresada para que el Estudio sea preciso y no devuelva resultados erroneos.</td>
                </tr>
                <tr>
                    <td valign="top"> </td>
                    <td valign="top"><h2 class="text-primary font-weight-bold">4</h2></td>
                    <td valign="top">Una vez chequeada la información ingresada debe presionar sobre "<strong>Realizar Consulta</strong>" para que el Departamento Técnologico de la Universidad Candegabe de Homeopatíaprocese la información y cargue los <strong>Resultados del Estudio</strong>.</td>
                </tr>
                <tr>
                    <td class="inst_pie" colspan="4" valign="top">
                        <div class="alert alert-info text-center">
                            Ante cualquier duda o consulta, le rogamos enviar un mail a <a href="mailto:info@algoritmocandegabe.com">info@algoritmocandegabe.com</a> <br>para poder asistirlo en la utilización del Algoritmo Candegabe.
                        </div>
                    </td>
                </tr>
            </table>
            <?php }else{ ?>
                <table class="table">
                    <tr>
                        <td valign="top"><h2 class="text-primary font-weight-bold">1</h2></td>
                        <td class="inst_text" rowspan="3" valign="top"><p>It is very important to enter the patient's specific information. Data should be ENTERED PRECISELY as shown in the following example:</p>
                            <ul>
                                <li>First name: (e.g. Susan Marie)</li>
                                <li>Maiden name: (e.g. Smith)</li>
                                <li>Name Normally used (Nickname): (e.g. Susan)</li>
                                <li>Initials: the first letter of each one of the names and last names: (e.g. MDAR)</li>
                                <li>Date of birth: (26/9/1986)</li>
                            </ul>
                            <p><strong>Nota</strong>: Sometimes the person identifies with his <strong>Nickname</strong>, not with his first name, in this case if the nickname has been fundamental or essential por his personality, it shall be enteres in the field <strong>Nickname</strong> substituting the first name. <strong>E.G. Susan Marie Smith was called "Missy" since she was a child</strong>.</p></td>
                        <td inst_num="" valign="top"><h2 class="text-primary font-weight-bold">2</h2></td>
                        <td valign="top"><p>The information shall be entered in the application form without symbols. Enter letters,( do not add letters with^,`,',~).</p></td>
                    </tr>
                    <tr>
                        <td valign="top"> </td>
                        <td valign="top"><h2 class="text-primary font-weight-bold">3</h2></td>
                        <td valign="top">Once you have entered all the patient's information, check the data completed so that the test is precise and does not show errors.</td>
                    </tr>
                    <tr>
                        <td valign="top"> </td>
                        <td valign="top"><h2 class="text-primary font-weight-bold">4</h2></td>
                        <td valign="top">Once the information entered has been checked you must press <strong>"Perform Study"</strong> so that the technological Department of Candegabe's Homeopathic University may process the information and load the <strong>Test Results</strong>.</td>
                    </tr>
                    <tr>
                        <td class="inst_pie" colspan="4" valign="top">
                            <div class="alert alert-info text-center">
                            If you have any doubts or any question about Candegabe's Algorithm, please contact us at <a href="mailto:info@algoritmocandegabe.com">info@algoritmocandegabe.com</a>.
                            </div>
                        </td>
                    </tr>
                </table>
            <?php } ?>
        </div>
    </div>
    <hr>
    <a href="#" rel="modal:close" class="btn btn-success waves-effect float-right">{{ _i('Cerrar') }}</a>
</div>
<!--************************************************************-->
