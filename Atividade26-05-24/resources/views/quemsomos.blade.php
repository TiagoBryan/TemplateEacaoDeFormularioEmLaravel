@extends('Components.layout')

@section('titulo', "HOME")

@section('conteudo')
<div class="container fundo-cont">
    <br><br><br>
    <div class="row">
        <div class="col">
            <div class="quem-cont">
            <div class="QuemSomos text-center">
                <strong>Quem somos?</strong><br><br>
                <img style="width: 90%; border-radius: 20px" src="{{ asset('img/a.jpg') }}" alt="QuemSomos">
                <br><br>
                <h1>A Irmandade do Sol Interior</h1>
                <div class="text-start">
                    <h2>Nossa Origem:</h2>
                    <p class="iman-quemS">A Irmandade do Sol Interior foi fundada há séculos por um grupo de sábios visionários que, através de intensas meditações e rituais secretos, descobriram uma fonte de energia espiritual pura. Essa fonte, que chamamos de "Sol Interior", reside dentro de cada ser humano, aguardando ser despertada. Inspirados por essa revelação, nossos fundadores criaram um espaço sagrado onde essa luz interior poderia ser nutrida e expandida.</p>
                </div>
                <hr class="quemSLinha">
                <div class="text-start">
                    <h2>Nossa Missão:</h2>
                    <p class="iman-quemS">Acreditamos que o verdadeiro poder e sabedoria vêm de dentro. Nossa missão é ajudar cada indivíduo a acessar seu Sol Interior, uma fonte inesgotável de amor, sabedoria e força espiritual. Fazemos isso através de uma combinação única de ensinamentos esotéricos, práticas de meditação profunda, rituais sagrados e estudos dos antigos textos místicos.</p>
                </div>
                <hr class="quemSLinha">
                <div class="text-start">
                    <h2>Nossos Rituais:</h2>
                    <p class="iman-quemS">Os rituais da Irmandade do Sol Interior são momentos sagrados de conexão e transformação. Realizados em locais cuidadosamente escolhidos, onde a energia da terra é mais forte, nossos rituais incluem meditações em grupo, cânticos sagrados, e cerimônias de purificação. Cada ritual é projetado para alinhar os participantes com seu Sol Interior e com o universo ao seu redor.</p>
                </div>
                <hr class="quemSLinha">
                <div class="text-start">
                    <h2>Nossa Comunidade:</h2>
                    <p class="iman-quemS">A Irmandade do Sol Interior é mais do que uma organização espiritual; somos uma família unida por um propósito comum. Nossos membros vêm de todas as partes do mundo, trazendo consigo uma diversidade de experiências e perspectivas. Juntos, criamos um ambiente de apoio, crescimento e transformação, onde cada indivíduo é incentivado a brilhar sua luz mais intensamente.</p>
                </div>
                <hr class="quemSLinha">
                <div class="text-start">
                    <h2>Junte-se a Nós:</h2>
                    <p class="iman-quemS">Se você sente um chamado interior para explorar os mistérios esotéricos e despertar seu verdadeiro potencial espiritual, convidamos você a se juntar à Irmandade do Sol Interior. Nossas portas estão abertas para todos aqueles que buscam a verdade, a sabedoria e a iluminação. Venha descobrir a luz que reside dentro de você e se tornar parte de uma comunidade dedicada ao crescimento espiritual e à harmonia universal.
A Luz do Sol Interior ilumina nosso caminho. Que ela possa também iluminar o seu.</p>
                </div>
                <hr class="quemSLinha">
            </div>
            </div>
        </div>
    </div>
</div>
@endsection