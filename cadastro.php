<?php
include_once "template" . DIRECTORY_SEPARATOR . "header.php";
require_once '_autoload.php';
$ce = new ControllerEstabelecimento();
$ce->cadastrar();
?>

<main role="main">
    <div class="container">
        <section class="album py-5">

            <?php
            if (isset($ce->cadastrar)) {
                echo "<p class='alert alert-info'>";
                print_r($ce->cadastrar);
                echo '</p>';
            }
            ?>
            <h2 class="display-4 text-success">Seja nosso parceiro!</h2>
            <small>O preenchimento correto das opções abaixo facilitarão na indexação do seu negócio.</small>
            <br /><br />
            <form enctype="multipart/form-data" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Nome do estabelecimento</label>
                            <input id="name" name="enome" type="text" placeholder="EX:. Farmácia Coopertral" class="form-control form-control-sm" maxlength="255" minlength="3" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Telefone Comercial</label>
                            <input id="phone" name="ephone" type="tel" placeholder="EX:. 61000000000" class="form-control form-control-sm" maxlength="11" minlength="11" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Categoria</label>
                            <select class="form-control form-control-sm" name="ecategory" id="category" required>
                                <option disabled selected>Selecione</option>
                                <?php
                                $categoria = new CategoriaDAO();
                                foreach ($categoria->listar() as $ca) {
                                    ?>
                                <option value="<?= $ca['cid']; ?>"><?= $ca['cnome']; ?></option>
                                <?php

                            }
                            ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mail">Email</label>
                            <input id="mail" name="eemail" type="email" placeholder="EX:. email@email.com" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="site">Site</label>
                            <input id="site" name="esite" type="url" value="http://" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="maps">Link do Google maps</label>
                            <textarea name="emaps" class="form-control form-control-sm" rows="1" placeholder="Cole o código aqui, para melhorar a visualização recomenda-se que retite o atributo WIDTH='600'. "></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="adress">Endereço</label>
                            <input id="adress" name="eadress" type="text" placeholder="EX:." class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="district" data-toggle="tooltip" data-placement="right" title="Caso o seu bairro não esteja aparecendo nos envie uma mensagem de contato">Bairro</label>
                            <select class="form-control form-control-sm" name="edistrict" required>
                                <option selected disabled>Bairro</option>
                                <?php
                                $bairro = new BairroDAO();
                                foreach ($bairro->listar() as $ba) {
                                    ?>
                                <option value="<?= $ba['bid']; ?>"><?= $ba['bnome']; ?></option>
                                <?php

                            }
                            ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="describe">Sobre</label>
                            <textarea name="edescribe" id="describe" class="form-control form-control-sm" placeholder="Aqui: Fale um pouco sobre o seu negócio, use uma descrição curta e objetiva."></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="imagem">Tamanho máximo da imagem 4MB</label>
                            <input class="form-control-sm file" id="imagem" name="imagem" type="file"><br />
                            <input type="checkbox" name="eterms" value="1" required><small><a href="#" data-toggle="modal" data-target="#exampleModalLong"> Aceito os termos de uso</a></small><br>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="g-recaptcha" data-sitekey="6LcboIwUAAAAAJYczHzfjt4t7FObIh-r93wFVjkG"></div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <button class="btn btn-success btn-lg" name="cadastrar" value="true"><i class="fa fa-save"></i> Confirmar</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Modal -->
            <div class="modal" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#3CB371;">
                            <h5 class="modal-title" id="exampleModalLongTitle">Termos de Uso</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="font-family:times new roman;">
                            <p>
                                Bem-vindo a Cooperativa Coopertral. A Cooperativa Coopertral apresenta os Termos de Uso (Termos de Uso) de seu
                                website (https://www.cooperativacoopertral.com.br), sua plataforma e seus serviços (juntos, a Plataforma)
                                estabelecidos neste documento. Nossa Política de Privacidade, também aplicável aos serviços, pode ser encontrada
                                em https://www.cooperativacoopertral.com.br/politica-privacidade.html.<br />
                                Reservamo-nos o direito de alterar ou modificar estes Termos de Uso ao nosso exclusivo critério, a qualquer
                                momento. Qualquer alterao ou modificao a estes Termos de Uso entrar em vigor imediatamente aps a publicao em
                                nosso website. Voc responsvel por analisar periodicamente a mais atualizada verso destes Termos de Uso.<br />
                                Os Termos de Uso e a Poltica de Privacidade so vlidos para todos os usurios de nossa Plataforma.<br />
                                O uso continuado dos nossos servios constitui a aceitao de quaisquer alteraes ou modificaes feitas nos Termos de
                                Uso.</p>
                            <p>
                                <strong>1. Aceitação aos Termos de Uso</strong><br />
                                1.1 Voc est autorizado a utilizar os Servios da Cooperativa Coopertral somente se voc concorda com todas regras
                                e condies estabelecidas nos Termos de Uso.<br />
                                1.2 Se voc no concorda com estes Termos de Uso, voc no est autorizado a acessar ou utilizar os Servios
                                oferecidos em nosso website. A utilizao dos Servios Cooperativa Coopertral est expressamente condicionada ao seu
                                consentimento s regras dos Termos de Uso.<br />
                                <strong>2. Usurios e Parceiros:</strong><br />
                                2.1 Usurios: O uso das reas pblicas da Cooperativa Coopertral est disponvel para qualquer pessoa, sem
                                necessidade de registro. Para poder usufruir dos servios privados, reservados aos Parceiros, o usurio deve se
                                registrar para se tornar um Parceiro da Cooperativa Coopertral. A palavra Usurio se referir a qualquer usurio
                                que no tenha se registrado como Parceiro da Cooperativa Coopertral.<br />
                                2.2 Senha e Segurana. Quando voc completar o seu processo de registro, voc criar uma senha que habilitar seu
                                acesso nossa Plataforma. Voc concorda em manter a confidencialidade da sua senha e inteiramente responsvel por
                                qualquer dano resultante da no manuteno dessa confidencialidade e de todas as atividades que ocorrerem atravs do
                                uso de sua senha. Voc concorda em nos notificar imediatamente de qualquer acesso no autorizado de sua senha ou
                                outra quebra de segurana. Voc concorda que a Cooperativa Coopertral no ser responsabilizada por qualquer perda
                                ou dano que ocorra a partir do no cumprimento desta clusula.<br />
                                <strong>3. Informaes Pblicas e Privadas:</strong><br />
                                3.1 Suas Informaes: so definidas como qualquer informao postada por voc ou que voc nos d (direta ou
                                indiretamente), inclusive atravs do seu processo de registro ou do seu uso de nossa Plataforma, comentrios em
                                blogs, mensagens enviadas dentro de nossa Plataforma, ou e-mail. Voc o nico responsvel por Suas Informaes, e ns
                                agimos como um canal passivo para a distribuio e publicao de suas Informaes Pblicas (como definidas
                                abaixo).<br />
                                3.2 Informaes Pblicas: seu nome, afiliao a companhias e localidade, bem como qualquer parte de Suas Informaes
                                que, atravs do uso de nossa Plataforma ou de outra maneira, voc envie ou disponibilize para a incluso em reas
                                pblicas de nosso website.<br />
                                3.3 Informao Privada: qualquer outra parte de Suas Informaes que no sejam Informaes Pblicas ser referida como
                                Informao Privada.<br />
                                3.4 reas pblicas: so aquelas reas do nosso website que so acessveis para alguns ou todos os nossos Parceiros
                                (p.ex., no restritas sua visualizao apenas) ou para o pblico geral.<br />
                                3.5 Acessibilidade das Informaes Pblicas. As suas Informaes Pblicas podem ser acessveis e publicadas por
                                programas de publicao automtica e por ferramentas de busca, ferramentas de metabusca, crawlers, metacrawlers e
                                outros similares.<br />
                                3.6 Restries. Ao considerar o uso de nossa Plataforma, voc concorda que as Suas Informaes:<br />
                                <ol type="A">
                                    <li>no devem ser fraudulentas;</li>
                                    <li>no devem infringir nenhum direito autoral de terceiros, patente, marca registrada, direito de distribuio
                                        ou outro direito de propriedade intelectual, de publicao ou privacidade;</li>
                                    <li>no devem violar nenhuma lei, estatuto, ordenao ou regulamento;</li>
                                    <li>no devem ser difamatrias, caluniosas, ameaadoras ou abusivas;</li>
                                    <li>no devem ser obscenas ou conter pornografia, pornografia infantil, ou fotos de pessoas despidas;</li>
                                    <li>no devem conter vrus, cavalos de tria, worms, time bombs, cancelbots, easter eggs ou outras rotinas de
                                        programao que possam danificar, interferir, interceptar ou desapropriar qualquer sistema, dado ou
                                        informao pessoal;</li>
                                    <li>no devem nos responsabilizar ou fazer com que percamos (total ou parcialmente) o servio do nosso
                                        Provedor de Internet ou outros fornecedores;</li>
                                    <li>no devem criar links direta ou indiretamente a qualquer material que voc no tenha direito de incluir ou
                                        linkar.</li>
                                </ol>
                                3.7 Obrigaes: Voc concorda tambm que dever nos informar um endereo vlido de e-mail, tanto na hora de seu
                                registro conosco quanto a cada vez que o seu e-mail mudar. Voc concorda tambm que o seu perfil de Parceiro, a
                                Newsletter da Cooperativa Coopertral, postagens de comentrios em blogs, uploads de fotos ou quaisquer pores do
                                website reservadas apenas a uso dos Parceiros no devem ser usadas por voc para atividades comerciais, vendas de
                                bens e servios, ou a promoo de uma companhia, bem ou servio no relacionado ao tpico ou esprito da Cooperativa
                                Coopertral ou de Grupo de Parceiros em particular. Voc ser exclusivamente responsvel pelas informaes que voc
                                postar nas reas publicamente acessveis da Plataforma, independente de sua inteno ou no de faz-lo.<br />
                                3.8 Privacidade: Todas as informaes pessoais relacionadas ao uso dos Servios ou ao uso do website Cooperativa
                                Coopertral esto sujeitas nossa Poltica de Privacidade que pode ser encontrada em
                                https://www.cooperativacoopertral.com.br/politica-privacidade.html.<br />
                                3.9 Licena. Ns no clamamos propriedade de Suas Informaes. Ns usaremos as suas Informaes Pessoais Identificveis
                                apenas de acordo com a nossa Poltica de Privacidade. Entretanto, para nos autorizar a usar suas Informaes
                                Pblicas e para nos assegurar de que no violamos nenhum direito que voc possa ter sobre suas Informaes Pblicas,
                                voc garante a Cooperativa Coopertral o direito no-exclusivo, universal, sem pagamento de royalties, em carter
                                total, definitivo, irrevogvel e irretratvel, de utilizar, a qualquer tempo, no Brasil e/ou no exterior e de
                                exercer, comercializar e explorar todos os direitos de cpia, publicidade, e direitos de base de dados que voc
                                possua sobre suas Informaes Pblicas, atravs de qualquer meio conhecido ou que venha a ser criado futuramente, e
                                para qualquer fim.<br />
                                3.10 Restries no Nosso Uso de Suas Informaes. Exceto se especificado contrariamente em nossa Poltica de
                                Privacidade, ns no venderemos, alugaremos ou divulgaremos nenhuma parte de suas Informaes Pessoais Identificveis
                                (como definidas em nossa Poltica de Privacidade) sobre voc (incluindo seu endereo de e-mail) para
                                terceiros.<br />
                                3.11 Consentimento de Divulgao. Voc entende e concorda que a Cooperativa Coopertral pode divulgar Suas Informaes
                                se requerida a faz-lo por lei ou por acreditar de boa f que essa divulgao razovel e necessria para:<br />
                                <ol type="A">
                                    <li>Cooperar com um procedimento judicial, uma ordem judicial ou processo legal sobre nós ou nosso website;
                                    </li>
                                    <li>Reforar os Termos de Uso;</li>
                                    <li>replicar a respeito da infrao do direito de terceiros por Suas Informaes;</li>
                                    <li>proteger os direitos, propriedades ou a segurana pessoal da Cooperativa Coopertral, seus empregados,
                                        usurios e pblico.</li>
                                </ol>
                                3.12 Consentimento de divulgao: A Cooperativa Coopertral reserva-se o direito, a seu exclusivo critrio, de
                                suspender ou terminar o seu uso de nossa Plataforma e de nossos Servios, de recusar todo e qualquer uso corrente
                                ou futuro de todas ou algumas partes de nossa Plataforma e/ou Servios.<br />
                                <strong>4. Condies gerais de uso dos Servios</strong><br />
                                4.1 Ao aceitar estes Termos de Uso, voc tem o direito no exclusivo, intransfervel, no sub-licencivel e limitado
                                de entrar, acessar e usar os Servios, para uso pessoal e comercial.<br />
                                4.2 Todos os direitos no previstos expressamente nestes Termos de Uso esto reservados a Cooperativa
                                Coopertral.<br />
                                4.3. Voc concorda que os Servios so para o seu uso pessoal e no comercial e que ningum alm de voc usar os
                                Servios. Voc no tem direitos de cpia ou reproduo no todo ou em parte, de qualquer parte dos Servios de
                                propriedade da Cooperativa Coopertral.<br />
                                4.4 Alm da licena limitada de uso estabelecida nestes Termos de Uso, voc no tem qualquer outro direito, ttulo ou
                                propriedade sobre os Servios. Voc entende e reconhece que, em quaisquer circunstncias, os seus direitos com
                                relao ao Servios sero limitados pelos direitos autorais e/ou leis de propriedade intelectual aplicveis e ainda
                                por estes Termos de Uso.<br />
                                4.5 A Cooperativa Coopertral poder modificar os Servios e/ou Contedo ou descontinuar a sua disponibilidade a
                                qualquer momento.<br />
                                4.6 Voc o nico responsvel pela obteno, pagamento e manuteno de todos os servios de telefonia, acesso internet,
                                plano de dados, tarifas e/ou outras taxas, mensalidades e custos associados ao seu acesso e uso dos Servios, bem
                                como pelo software, hardware de computador e outros equipamentos necessrios para o uso e acesso aos
                                Servios.<br />
                                4.7. No obstante outras disposies contidas nestes Termos de Uso, os Servios esto disponveis para seu uso por um
                                perodo que comea a partir do registro de seus dados.<br />
                                4.8. Voc no deve tentar nem apoiar as tentativas de terceiros para driblar, reverter a engenharia, decodificar,
                                decompilar, desmontar ou fraudar ou interferir de qualquer forma com aspectos dos Servios. Voc no deve
                                distribuir, intercambiar, modificar, vender ou revender ou retransmitir a qualquer pessoa qualquer parte dos
                                Servios, incluindo, mas no se limitando, a qualquer texto, imagem ou udio, para qualquer finalidade empresarial
                                comercial ou pblica. Voc concorda em no copiar, vender, distribuir ou transferir o Contedo e/ou Servios
                                Cooperativa Coopertral.<br />
                                <strong>6. Uso da Plataforma</strong><br />
                                6.1 Responsabilidade e Controle. Voc, e no a Cooperativa Coopertral, inteiramente responsvel por Suas Informaes
                                que faa upload, poste, distribua, envie por e-mail ou de alguma outra forma torne disponvel via nossa
                                Plataforma. Ns no controlamos suas Informaes Pblicas ou as Informaes Pblicas de outros Parceiros ou postadas por
                                eles, e no garantimos a preciso, integridade ou a qualidade de Suas Informaes ou das Informaes postadas por ou
                                sobre outros Parceiros, nem endossamos nenhuma opinio expressada por voc ou por outros Parceiros. Voc entende
                                que usando nossa Plataforma, voc pode ser exposto a informaes ofensivas, indecentes ou com as quais no concorde.
                                Ns no temos nenhuma obrigao de monitorar, nem tomamos qualquer responsabilidade pelas Suas Informaes, pelas
                                Informaes Pblicas ou informaes a respeito de quaisquer assuntos ou postadas por outros Usurios. Voc concorda que
                                sob nenhuma circunstncia a Cooperativa Coopertral, seus diretores, scios ou funcionrios podero ser
                                responsabilizados por quaisquer informaes, incluindo, mas no se limitando a erros ou omisses nas Suas Informaes
                                ou nas Informaes Pblicas postadas por ou sobre outros Parceiros, por perdas e danos de qualquer tipo, ocorridas
                                como resultado do uso das Suas Informaes ou de quaisquer Informaes Pblicas de ou sobre outros Parceiros que
                                venham a ser postadas, enviadas por e-mail, transmitidas ou disponibilizadas de qualquer outra maneira conectada
                                nossa Plataforma, ou por qualquer falha em corrigir ou remover quaisquer dessas informaes.<br />
                                <strong>6.2 Condies para Suspenso ou Trmino dos Servios.</strong><br />
                                6.2.1 Os seguintes tipos de ao so vedados no website e na Plataforma Cooperativa Coopertral e so passveis de
                                suspenso e/ou trmino imediato do seu status de Parceiro:<br />
                                <ol type="A">
                                    <li>Uso de nossa Plataforma para:</li>
                                    <ol type="I">
                                        <li>ameaar ou intimidar outra pessoa de qualquer forma, incluindo a restrio ou inibio do uso de nossa
                                            Plataforma;</li>
                                        <li>personificar qualquer pessoa (incluindo a equipe da Cooperativa Coopertral ou outros Parceiros), ou
                                            atestar falsamente afiliao ou representao de qualquer pessoa ou companhia, atravs do uso de endereos
                                            de e-mail similares, apelidos, ou a criao de contas falsas ou qualquer outro mtodo ou procedimento;
                                        </li>
                                        <li>disfarar a origem de quaisquer Informaes Pblicas que sejam transmitidas a terceiros;</li>
                                        <li>perseguir ou perturbar outrem;</li>
                                        <li>coletar ou armazenar dados pessoais de outros usurios;</li>
                                    </ol>
                                    <li>Postar quaisquer Informaes Pblicas ou outro material:</li>
                                    <ol type="I">
                                        <li>que seja ilegal, ofensivo, racista, preconceituoso, ameaador, abusivo, perturbador, difamatrio,
                                            intimidador, vulgar, obsceno, profano, acusatrio, que invada a privacidade de outrem (inclusive a
                                            postagem de e-mails privados ou informaes de contato de outros usurios), odioso, racial, eticamente
                                            ou de qualquer outra forma contestvel, incluindo quaisquer Informaes Pblicas ou outro material que
                                            possa ser considerado um discurso de dio;</li>
                                        <li> que seja obsceno, pornogrfico ou adulto por natureza;</li>
                                        <li> que voc no tenha o direito de disponibilizar por qualquer lei ou por contrato;</li>
                                        <li> que infrinja qualquer patente, marca registrada, segredo comercial, direitos autorais ou quaisquer
                                            outros direitos de propriedade intelectual ou direitos de terceiros;</li>
                                        <li> que seja qualquer tipo de propaganda ou material promocional no solicitado, ou qualquer outra forma
                                            de solicitao (incluindo, mas no se limitando a spam, junk mail, e correntes de e-mail);</li>
                                        <li> que seja de qualquer outra forma inapropriado ou postado de m f;</li>
                                    </ol>
                                    <li>Encorajar outrem a violar os Termos de Uso ou se recusar a seguir instrues da equipe da Cooperativa
                                        Coopertral;</li>
                                    <li>Violar (intencional ou no intencionalmente) os Termos de Uso, ou de qualquer lei, ordenao, estatuto ou
                                        regulamento local, estadual, nacional ou internacional aplicvel.</li>
                                </ol>
                                6.2.2 Mesmo que ns proibamos o contedo e as condutas acima, voc entende e concorda que voc poder vir a ser
                                exposto a tais condutas e contedos e que usa a Plataforma a seu prprio risco. Para os propsitos destes Termos de
                                Uso, postar inclui o upload, a postagem, distribuio, envio de e-mails, publicao, transmisso ou disponibilizao de
                                alguma outra forma.<br />
                                6.2.3 Sem se limitar aos ao disposto acima, a Cooperativa Coopertral tem o direito de remover quaisquer
                                Informaes Pblicas ou outro material que viole esses Termos de Uso ou seja de outra maneira questionvel.<br />
                                6.3 No-Interferncia com a Plataforma. Voc concorda que no ir:<br />
                                <ol type="A">
                                    <li>fazer upload, postar, publicar, distribuir, enviar por e-mail ou transmitir de qualquer outra forma
                                        rotinas de programao, arquivos ou programas com a inteno de interromper, destruir ou limitar as
                                        funcionalidades de qualquer software ou hardware ou equipamento de telecomunicao;</li>
                                    <li>interferir com ou perturbar nossa Plataforma ou com as redes conectadas ao nosso website atravs do uso
                                        de nossa Plataforma, ou desobedecer quaisquer requerimentos, procedimentos, polticas ou regulamentos das
                                        redes conectadas ao nosso website, ou de alguma outra maneira interferir com a nossa Plataforma em
                                        qualquer
                                        sentido, incluindo atravs do uso de JavaScript, ou outros cdigos;</li>
                                    <li>agir de qualquer maneira que imponha uma carga excessivamente pesada, que seja desproporcional ou no
                                        razovel, em nossa infraestrutura;</li>
                                    <li>copiar, reproduzir, alterar, modificar ou exibir publicamente qualquer informao que esteja disponvel em
                                        nosso website (exceto as Suas Informaes), ou criar trabalhos derivados do nosso website (exceto Suas
                                        Informaes), com o entendimento de que tais aes constituiriam infrao de direitos autorais ou outro tipo
                                        de
                                        violao propriedade intelectual e/ou industrial da Cooperativa Coopertral ou de quaisquer terceiros,
                                        exceto
                                        se autorizado por escrito e com antecedncia pela Cooperativa Coopertral ou pelo terceiro.</li>
                                </ol>
                                6.4 Prticas Gerais de Uso da Plataforma. Voc declara saber e entender que ns podemos estabelecer prticas e
                                limites gerais no que diz respeito ao uso de nossa Plataforma. Voc concorda que ns no nos responsabilizamos nem
                                podemos ser responsabilizados pelo armazenamento ou apagamento, ou pela falha em armazenar ou apagar, qualquer
                                uma de Suas Informaes. Voc entende que ns nos reservamos o direito de suspender Parceiros que estejam inativos
                                por um perodo extenso de tempo. Voc entende que ns nos reservamos o direito de mudar essas prticas e limites
                                gerais a qualquer momento, a nosso critrio, com ou sem aviso.<br />
                                <strong>7. Comunicados da Equipe Cooperativa Coopertral</strong><br />
                                7.1 Voc entende e concorda que ns podemos enviar certos comunicados, como anncios de servios da Cooperativa
                                Coopertral e newsletters, bem como ofertas de bens e servios relevantes e que beneficiem voc ou qualquer grupo
                                de Parceiros unidos por afinidade que voc possa vir a participar, e que esses comunicados so considerados parte
                                de nossa Plataforma.<br />
                                <strong>8. Links</strong>
                                8.1 Ns podemos providenciar, ou terceiros podem providenciar e publicar, links para outros websites ou recursos.
                                Por no termos controle sobre tais websites ou recursos, voc entende e concorda que ns no somos responsveis pela
                                disponibilidade de tais websites e recursos, e ns no endossamos e no nos responsabilizamos nem somos passveis de
                                ser responsabilizados por qualquer contedo, publicidade, produto, ou outro material disponvel neste ou atravs
                                deste website ou recurso.<br />
                                8.2 Voc tambm entende e concorda que a Cooperativa Coopertral no ser responsvel nem poder ser responsabilizada,
                                direta ou indiretamente, por quaisquer perdas e danos causadas ou alegadas de terem sido causadas ou
                                relacionadas ao uso de qualquer contedo, bem ou servio disponvel na Plataforma ou atravs do uso de qualquer um
                                desses websites, recursos e/ou servios.<br />
                                <strong>9. Garantias e Responsabilidades</strong>
                                9.1 Iseno de Garantias. Voc usa a nossa Plataforma a seu prprio e exclusivo risco. Nossa Plataforma oferecida a
                                voc como e como est disponvel. Ns nos isentamos de garantias e condies de qualquer tipo, sejam expressas,
                                implcitas ou institudas, incluindo mas no se limitando a garantias relacionadas segurana, confiabilidade,
                                convenincia e performance de nossa Plataforma. Ns nos isentamos ainda de quaisquer garantias sobre informaes ou
                                conselhos obtidos atravs de nossa Plataforma. Isentamo-nos de quaisquer garantias de terceiros por servios ou
                                bens recebidos atravs ou anunciados em nossa Plataforma ou recebidos atravs de links exibidos em nossa
                                Plataforma, bem como por qualquer informao ou conselho recebido atravs de quaisquer links exibidos em nossa
                                Plataforma. Alm disso, nenhum conselho ou informao, seja oral ou escrita, obtida de voc por ns, deve criar
                                nenhum tipo de garantia.<br />
                                9.2 Limitao de Responsabilidade. Voc concorda que, em nenhuma circunstncia, a Cooperativa Coopertral poder ser
                                responsabilizada por qualquer dano direto, indireto, incidental, especial, consequencial ou punitivo, incluindo
                                mas no se limitando a perdas e danos, lucros cessantes, perda de uma chance, outras perdas e danos intangveis
                                (ainda que a Cooperativa Coopertral tenha sido alertada sobre a possibilidade de ocorrncia de tais danos),
                                relacionado ao uso dos Servios ou de nossa Plataforma, nem com relao incapacidade e/ou impossibilidade de us-los
                                (incluindo hipteses de negligncia).<br />
                                <strong>10. Resciso</strong>
                                10.1 Voc concorda que ns, ao nosso critrio, podemos disparar um alerta, suspender temporariamente,
                                indefinidamente ou remover completamente qualquer contedo ou informao postada por voc, ou encerrar com o seu
                                status de Parceiro ou com a sua capacidade de uso total ou parcial de nossa Plataforma, por qualquer razo,
                                incluindo mas no se limitando a:<br />
                                <ol type="A">
                                    <li>por falta de uso;</li>
                                    <li>se ns acreditarmos que voc violou ou agiu de forma
                                        inconsistente com o esprito destes Termos de Uso ou dos documentos incorporados como referncia;</li>
                                    <li>se no formos
                                        capazes de verificar ou autenticar qualquer informao que voc nos fornea;</li>
                                    <li>se acreditarmos que suas aes possam
                                        gerar responsabilidade civil a voc, aos nossos usurios ou a ns.</li>
                                </ol>
                                10.2 Voc declara-se ciente de que o encerramento da sua conta ou do acesso total ou parcial Plataforma por
                                motivo esclarecido nesses Termos de Uso poder ser efetuado sem aviso prvio, e entende e concorda que poderemos
                                imediatamente desativar ou apagar a sua conta e todas as informaes e arquivos relativos a ela e/ou barrar seu
                                acesso futuro nossa Plataforma. Voc tambm concorda que ns no podemos ser responsabilizados por voc ou por
                                terceiros pelo encerramento do seu uso de todas ou quaisquer partes da Plataforma.<br />
                                10.3 A Cooperativa Coopertral reserva-se o direito de rescindir o seu plano de Servios e/ou o seu acesso aos
                                Servios por violao dos Termos de Uso. Caso a sua inscrio e contratao dos Servios sejam rescindidas, nenhum
                                pagamento, mensalidade, taxa ou despesa ser reembolsvel.<br />
                                <strong>12. Propriedade Intelectual</strong><br />
                                12.1 Direitos autorais. O contedo publicado no website Cooperativa Coopertral e outros trabalhos de autoria
                                encontrados na Plataforma como parte dos Servios ("Contedo") esto protegidos pelas leis e tratados de direitos
                                autorais nacionais e internacionais, assim como outras leis e tratados de propriedade intelectual. O Contedo
                                licenciado, no vendido. Voc no pode fazer cpias no autorizadas ou usar nenhum Contedo, exceto como especificado
                                aqui e de acordo com as leis aplicveis. Todos os direitos autorais do Contedo e dos Servios (incluindo, mas no
                                se limitando a imagens, fotografias, animaes, vdeos, udio, msica, texto, layout e look and feel incorporados nos
                                Servios) so de propriedade da Cooperativa Coopertral. Voc concorda em cumprir com todas as leis de proteo dos
                                direitos autorais relacionadas ao uso dos Servios e do Contedo. A Cooperativa Coopertral reserva-se o direito de
                                tomar as medidas que julgar apropriadas, a seu exclusivo critrio, a fim de proteger os direitos autorais do
                                Contedo e dos Servios, alm das condies previstas nestes Termos de Uso.<br />
                                12.3 No permitido aos Usurios e Parceiros tentar reconfigurar, desmontar ou fazer engenharia reversa no website,
                                nos Servios e/ou no Contedo da Cooperativa Coopertral.<br />
                                12.4 Marcas. Voc no esta autorizado a utilizar nenhum marca e/ou sinais distintivos encontrados no website, no
                                Contedo e/ou nos Servios da Cooperativa Coopertral. Voc no pode copiar, exibir ou usar nenhuma das marcas
                                comerciais sem consentimento prvio por escrito do seu proprietrio. Qualquer uso no autorizado poder violar as
                                leis de propriedade industrial, leis de privacidade, de propriedade intelectual e ainda estatutos civis e/ou
                                criminais.<br />
                                12.5 Todos os direitos e licenas no concedidos expressamente nestes Termos de Uso so reservados aos proprietrios
                                dos Contedos e/ou Servios. Estes Termos de Uso no concedem quaisquer licenas implcitas.<br />
                                <strong>14. Disposies Gerais</strong><br />
                                14.1. Estes Termos de Uso, juntamente com a Poltica de Privacidade publicada no nosso website, constituem o
                                acordo integral entre as Partes com relao ao objeto em questo, e substituem todos os acordos anteriores,
                                escritos ou verbais.<br />
                                14.2. As Partes so contratantes independentes, no resultando este instrumento na criao de qualquer sociedade,
                                franquia, representao de vendas ou relaes que no as expressamente previstas nestes Termos de Uso.<br />
                                14.3. Caso qualquer uma das clusulas e condies destes Termos de Uso venha a ser declarada nula, no todo ou em
                                parte, por qualquer motivo legal ou contratual, as demais clusulas continuaro em pleno vigor e efeito.<br />
                                14.4 A tolerncia ou o no exerccio, por qualquer das Partes, de quaisquer direitos a ela assegurados nestes
                                Termos de Uso ou na lei em geral no importar em novao ou em renncia a qualquer desses direitos, podendo a
                                referida Parte exerc-los durante a vigncia destes Termos de Uso.<br />
                            </p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php include_once "template" . DIRECTORY_SEPARATOR . "footer.php"; ?> 