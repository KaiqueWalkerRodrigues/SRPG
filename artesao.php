<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página com Bloco Branco</title>
  <style>
    body {
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .bloco-branco {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      position: absolute;
      top: 60%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .linha-preta {
      background-color: black;
      height: 2px;
      width: 100%;
      margin-top: -20px;
      position: relative;
    } 
  </style>
</head>
<body>
  <div class="bloco-branco">
    
    <h1>Artesão</h1>
    <div class="linha-preta"></div>
    <p>Você precisa ter um valor de Inteligência igual ou superior a 13 para escolher essa classe.</p>

    <table style="border-collapse: separate; border-spacing: 10px;">
        <thead>
            <tr>
              <th style="text-align: left;">Nível</th>
              <th style="text-align: left;">Bônus de Proficiência</th>
              <th style="text-align: left;">Características</th>
              <th style="text-align: left;">Infusões Conhecidas</th>
              <th style="text-align: left;">Máximo de Infusões Ativas</th>
              <th style="text-align: left;">Truques Conhecidos</th>
              <th style="text-align: left;">Nv1</th>
              <th style="text-align: left;">Nv2</th>
              <th style="text-align: left;">Nv3</th>
              <th style="text-align: left;">Nv4</th>
              <th style="text-align: left;">Nv5</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td style="text-align: center">1°</td>
              <td style="text-align: center">+2</td>
              <td style="text-align: left">Consertos Mágicos e Feitiços</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">2°</td>
              <td style="text-align: center">+2</td>
              <td style="text-align: left">Infusão com Item</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">3°</td>
              <td style="text-align: center">+2</td>
              <td style="text-align: left">Artesão Especialista, Sempre Pronto</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">4°</td>
              <td style="text-align: center">+2</td>
              <td style="text-align: left">Pontuação de Habilidade</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">5°</td>
              <td style="text-align: center">+3</td>
              <td style="text-align: left">Recurso Especialista de Artesão</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">6°</td>
              <td style="text-align: center">+3</td>
              <td style="text-align: left">Experiência em Ferramentas</td>
              <td style="text-align: center">6</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">7°</td>
              <td style="text-align: center">+3</td>
              <td style="text-align: left">Flash de Gênio</td>
              <td style="text-align: center">6</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">8°</td>
              <td style="text-align: center">+3</td>
              <td style="text-align: left">Pontuação de Habilidade</td>
              <td style="text-align: center">6</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">9°</td>
              <td style="text-align: center">+4</td>
              <td style="text-align: left">Recurso Especialista de Artesão</td>
              <td style="text-align: center">6</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">10°</td>
              <td style="text-align: center">+4</td>
              <td style="text-align: left">Adepto de itens mágicos</td>
              <td style="text-align: center">8</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">11°</td>
              <td style="text-align: center">+4</td>
              <td style="text-align: left">Item de armazenamento de feitiços</td>
              <td style="text-align: center">8</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">12°</td>
              <td style="text-align: center">+4</td>
              <td style="text-align: left">Pontuação de Habilidade</td>
              <td style="text-align: center">8</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">-</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">13°</td>
              <td style="text-align: center">+5</td>
              <td style="text-align: left">-</td>
              <td style="text-align: center">8</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">1</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">14°</td>
              <td style="text-align: center">+5</td>
              <td style="text-align: left">Savant de Itens Mágicos</td>
              <td style="text-align: center">10</td>
              <td style="text-align: center">5</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">1</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">15°</td>
              <td style="text-align: center">+5</td>
              <td style="text-align: left">Recurso Especialista de Artesão</td>
              <td style="text-align: center">10</td>
              <td style="text-align: center">5</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">16°</td>
              <td style="text-align: center">+5</td>
              <td style="text-align: left">Pontuação de Habilidade</td>
              <td style="text-align: center">10</td>
              <td style="text-align: center">5</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">2</td>
              <td style="text-align: center">-</td>
            </tr>
            <tr>
              <td style="text-align: center">17°</td>
              <td style="text-align: center">+6</td>
              <td style="text-align: left">-</td>
              <td style="text-align: center">10</td>
              <td style="text-align: center">5</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">1</td>
            </tr>
            <tr>
              <td style="text-align: center">18°</td>
              <td style="text-align: center">+6</td>
              <td style="text-align: left">Mestre de Itens Mágicos</td>
              <td style="text-align: center">12</td>
              <td style="text-align: center">6</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">1</td>
            </tr>
            <tr>
              <td style="text-align: center">19°</td>
              <td style="text-align: center">+6</td>
              <td style="text-align: left">Pontuação de Habilidade</td>
              <td style="text-align: center">12</td>
              <td style="text-align: center">6</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">2</td>
            </tr>
            <tr>
              <td style="text-align: center">20°</td>
              <td style="text-align: center">+6</td>
              <td style="text-align: left">Alma do Artesão</td>
              <td style="text-align: center">12</td>
              <td style="text-align: center">6</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">4</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">3</td>
              <td style="text-align: center">2</td>
            </tr>
        </tbody>
    </table>

    <h2>Recursos da classe</h2>

    <p>Pontos de Vida</p>
    <p>Dado de Vida: 1d8 por nivel de artesão</p>
    <p>Pontos de Vida no nivel 1: 8 + seu bônus de Constituição</p>
    <p>Pontos de Vida em niveis mais altos: 1d8 (or 5) + seu bônus de Constituição por nivel de artesão após o 1°</p>

  </div>
</body>
</html>