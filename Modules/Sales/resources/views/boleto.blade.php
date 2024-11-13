<!DOCTYPE html>
<!--
 * OpenBoleto - Geração de boletos bancários em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        Empresa de cosméticos LTDA </title>
    <style type="text/css">
        /* Embed the CSS content here */
        /**
 * OpenBoleto - Geração de boletos bancários em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

        @media print {
            .noprint {
                display: none;
            }
        }

        body {
            background-color: #ffffff;
            margin-right: 0;
        }

        .table-boleto {
            font: 9px Arial;
            width: 666px;
        }

        .table-boleto td {
            border-left: 1px solid #000;
            border-top: 1px solid #000;
        }

        .table-boleto td:last-child {
            border-right: 1px solid #000;
        }

        .table-boleto .titulo {
            color: #000033;
        }

        .linha-pontilhada {
            color: #000033;
            font: 9px Arial;
            width: 100%;
            border-bottom: 1px dashed #000;
            text-align: right;
            margin-bottom: 10px;
        }

        .table-boleto .conteudo {
            font: bold 10px Arial;
            height: 11.5px;
        }

        .table-boleto .sacador {
            display: inline;
            margin-left: 5px;
        }

        .table-boleto td {
            padding: 1px 4px;
        }

        .table-boleto .noleftborder {
            border-left: none !important;
        }

        .table-boleto .notopborder {
            border-top: none !important;
        }

        .table-boleto .norightborder {
            border-right: none !important;
        }

        .table-boleto .noborder {
            border: none !important;
        }

        .table-boleto .bottomborder {
            border-bottom: 1px solid #000 !important;
        }

        .table-boleto .rtl {
            text-align: right;
        }

        .table-boleto .logobanco {
            display: inline-block;
            max-width: 150px;
        }

        .table-boleto .logocontainer {
            width: 257px;
            display: inline-block;
        }

        .table-boleto .logobanco img {
            margin-bottom: -5px;
            height: 27px;
        }

        .table-boleto .codbanco {
            font: bold 20px Arial;
            padding: 1px 5px;
            display: inline;
            border-left: 2px solid #000;
            border-right: 2px solid #000;
            width: 51px;
            margin-left: 25px;
        }

        .table-boleto .linha-digitavel {
            font: bold 14px Arial;
            display: inline-block;
            width: 406px;
            text-align: right;
        }

        .table-boleto .nopadding {
            padding: 0px !important;
        }

        .table-boleto .caixa-gray-bg {
            font-weight: bold;
            background: #ccc;
        }

        .info {
            font: 11px Arial;
        }

        .info-empresa {
            font: 11px Arial;
        }

        .header {
            font: bold 13px Arial;
            display: block;
            margin: 4px;
        }

        .barcode {
            height: 50px;
        }

        .barcode div {
            display: inline-block;
            height: 100%;
        }

        .barcode .black {
            border-color: #000;
            border-left-style: solid;
            width: 0px;
        }

        .barcode .white {
            background: #fff;
        }

        .barcode .thin.black {
            border-left-width: 1px;
        }

        .barcode .large.black {
            border-left-width: 3px;
        }

        .barcode .thin.white {
            width: 1px;
        }

        .barcode .large.white {
            width: 3px;
        }

        .float_left {
            float: left;
        }

        .center {
            text-align: center;
        }

        .conteudo.cpf_cnpj {
            float: right;
            width: 24%;
        }

        .logotipo {
            max-height: 50px;
        }
    </style>
</head>

<body>

    <div style="width: 666px">
        <div class="noprint info">
            <h2>Instruções de Impressão</h2>
            <ul>
                <li>Imprima em impressora jato de tinta (ink jet) ou laser em qualidade normal ou alta (Não use modo
                    econômico).</li>
                <li>Utilize folha A4 (210 x 297 mm) ou Carta (216 x 279 mm) e margens mínimas à esquerda e à direita
                    do
                    formulário.</li>
                <li>Corte na linha indicada. Não rasure, risque, fure ou dobre a região onde se encontra o código de
                    barras.</li>
                <li>Caso não apareça o código de barras no final, pressione F5 para atualizar esta tela.</li>
                <li>Caso tenha problemas ao imprimir, copie a sequencia numérica abaixo e pague no caixa eletrônico
                    ou no
                    internet banking:</li>
            </ul>
            <span class="header">Linha Digitável:
                00191.23413 23456.717240 10403.005183 3 55880000002300 </span>
            <span class="header">Valor: R$
                23,00 </span>
            <br>
            <div class="linha-pontilhada" style="margin-bottom: 20px;">Recibo do pagador</div>
        </div>

        <table class="table-boleto" cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                    <td valign="bottom" colspan="8" class="noborder nopadding">
                        <div class="logocontainer">
                            <div class="logobanco">
                                <img src="data:image/jpg;base64,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"
                                    alt="logotipo do banco">
                            </div>
                            <div class="codbanco">
                                001-9 </div>
                        </div>
                        <div class="linha-digitavel">
                            00191.23413 23456.717240 10403.005183 3 55880000002300 </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" width="250" rowspan="2" valign="top">
                        <div class="titulo">Beneficiário</div>
                        <div class="conteudo">
                            Empresa de cosméticos LTDA<br />
                            CLS 403 Lj 23<br />
                            71000-000 - Brasília - DF </div>
                    </td>
                    <td colspan="2">
                        <div class="titulo">CPF/CNPJ do Beneficiário</div>
                        <div class="conteudo">
                            02.123.123/0001-11 </div>
                    </td>
                </tr>
                <tr>
                    <td width="120">
                        <div class="titulo">Agência/Código do Beneficiário</div>
                        <div class="conteudo rtl">
                            1724 / 10403005 </div>
                    </td>
                    <td width="110">
                        <div class="titulo">Vencimento</div>
                        <div class="conteudo rtl">
                            24/01/2013 </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="titulo">Pagador</div>
                        <div class="conteudo float_left">
                            Fernando Maia </div>
                        <div class="conteudo cpf_cnpj">
                            023.434.234-34 </div>
                    </td>
                    <td>
                        <div class="titulo">Nº documento</div>
                        <div class="conteudo rtl">
                        </div>
                    </td>
                    <td>
                        <div class="titulo">Nosso número</div>
                        <div class="conteudo rtl">
                            12341234567-1 </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="titulo">Espécie</div>
                        <div class="conteudo">
                            REAL </div>
                    </td>
                    <td>
                        <div class="titulo">Quantidade</div>
                        <div class="conteudo rtl">
                        </div>
                    </td>
                    <td>
                        <div class="titulo">Valor</div>
                        <div class="conteudo rtl">
                        </div>
                    </td>
                    <td>
                        <div class="titulo">(-) Descontos / Abatimentos</div>
                        <div class="conteudo rtl">
                        </div>
                    </td>
                    <td>
                        <div class="titulo">(=) Valor Documento</div>
                        <div class="conteudo rtl">
                            23,00 </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="conteudo"></div>
                        <div class="titulo">Demonstrativo</div>
                    </td>
                    <td>
                        <div class="titulo">(-) Outras deduções</div>
                        <div class="conteudo">
                        </div>
                    </td>
                    <td>
                        <div class="titulo">(+) Outros acréscimos</div>
                        <div class="conteudo rtl">
                        </div>
                    </td>
                    <td>
                        <div class="titulo">(=) Valor cobrado</div>
                        <div class="conteudo rtl">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <div style="margin-top: 10px" class="conteudo">
                        </div>
                    </td>
                    <td class="noleftborder">
                        <div class="titulo">Autenticação mecânica</div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="notopborder">
                        <table style="width: 100%;" cellpadding="0" cellspacing="0" border="0"
                            style="margin:0; padding:0;">
                            <tbody style="margin:0; padding:0;">
                                <tr style="margin:0; padding:0;">
                                    <td style="margin:0; padding:0;" class="noborder">
                                        <div class="conteudo">
                                        </div>
                                    </td>
                                </tr>
                                <tr style="margin:0; padding:0;">
                                    <td style="margin:0; padding:0;" class="noborder">
                                        <div class="conteudo">
                                        </div>
                                    </td>
                                </tr>
                                <tr style="margin:0; padding:0;">
                                    <td style="margin:0; padding:0;" class="noborder">
                                        <div class="conteudo">
                                        </div>
                                    </td>
                                </tr>
                                <tr style="margin:0; padding:0;">
                                    <td style="margin:0; padding:0;" class="noborder">
                                        <div style="margin-bottom: 10px;" class="conteudo">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td class="notopborder nobottomborder noleftborder" style="text-align:center">
                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGNsYXNzPSJxci1zdmcgcXJjb2RlIiB2aWV3Qm94PSIwIDAgNDEgNDEiIHByZXNlcnZlQXNwZWN0UmF0aW89InhNaWRZTWlkIj4KPHBhdGggY2xhc3M9InFyLWRhdGEgbGlnaHQgcXJjb2RlIiBmaWxsPSIjZmZmIiBkPSJNMTMgNCBoMSB2MSBoLTFaIE0xNCA0IGgxIHYxIGgtMVogTTE5IDQgaDEgdjEgaC0xWiBNMjAgNCBoMSB2MSBoLTFaIE0yMyA0IGgxIHYxIGgtMVogTTI4IDQgaDEgdjEgaC0xWiBNMTUgNSBoMSB2MSBoLTFaIE0xNiA1IGgxIHYxIGgtMVogTTE5IDUgaDEgdjEgaC0xWiBNMjAgNSBoMSB2MSBoLTFaIE0yMiA1IGgxIHYxIGgtMVogTTI0IDUgaDEgdjEgaC0xWiBNMjYgNSBoMSB2MSBoLTFaIE0yNyA1IGgxIHYxIGgtMVogTTI4IDUgaDEgdjEgaC0xWiBNMTMgNiBoMSB2MSBoLTFaIE0xNSA2IGgxIHYxIGgtMVogTTIwIDYgaDEgdjEgaC0xWiBNMjEgNiBoMSB2MSBoLTFaIE0yNyA2IGgxIHYxIGgtMVogTTI4IDYgaDEgdjEgaC0xWiBNMTMgNyBoMSB2MSBoLTFaIE0xNCA3IGgxIHYxIGgtMVogTTE1IDcgaDEgdjEgaC0xWiBNMTggNyBoMSB2MSBoLTFaIE0yMiA3IGgxIHYxIGgtMVogTTIzIDcgaDEgdjEgaC0xWiBNMjQgNyBoMSB2MSBoLTFaIE0yOCA3IGgxIHYxIGgtMVogTTE0IDggaDEgdjEgaC0xWiBNMTYgOCBoMSB2MSBoLTFaIE0xOSA4IGgxIHYxIGgtMVogTTIxIDggaDEgdjEgaC0xWiBNMjcgOCBoMSB2MSBoLTFaIE0xMyA5IGgxIHYxIGgtMVogTTE1IDkgaDEgdjEgaC0xWiBNMTkgOSBoMSB2MSBoLTFaIE0yMyA5IGgxIHYxIGgtMVogTTI0IDkgaDEgdjEgaC0xWiBNMTMgMTEgaDEgdjEgaC0xWiBNMTYgMTEgaDEgdjEgaC0xWiBNMjAgMTEgaDEgdjEgaC0xWiBNMjEgMTEgaDEgdjEgaC0xWiBNMjIgMTEgaDEgdjEgaC0xWiBNMjMgMTEgaDEgdjEgaC0xWiBNMjUgMTEgaDEgdjEgaC0xWiBNMjcgMTEgaDEgdjEgaC0xWiBNMjggMTEgaDEgdjEgaC0xWiBNMTYgMTIgaDEgdjEgaC0xWiBNMTcgMTIgaDEgdjEgaC0xWiBNMTggMTIgaDEgdjEgaC0xWiBNMjAgMTIgaDEgdjEgaC0xWiBNMjIgMTIgaDEgdjEgaC0xWiBNMjMgMTIgaDEgdjEgaC0xWiBNMjYgMTIgaDEgdjEgaC0xWiBNMjcgMTIgaDEgdjEgaC0xWiBNMjggMTIgaDEgdjEgaC0xWiBNNSAxMyBoMSB2MSBoLTFaIE04IDEzIGgxIHYxIGgtMVogTTkgMTMgaDEgdjEgaC0xWiBNMTIgMTMgaDEgdjEgaC0xWiBNMTQgMTMgaDEgdjEgaC0xWiBNMTUgMTMgaDEgdjEgaC0xWiBNMjAgMTMgaDEgdjEgaC0xWiBNMjEgMTMgaDEgdjEgaC0xWiBNMjIgMTMgaDEgdjEgaC0xWiBNMjMgMTMgaDEgdjEgaC0xWiBNMjQgMTMgaDEgdjEgaC0xWiBNMjggMTMgaDEgdjEgaC0xWiBNMzAgMTMgaDEgdjEgaC0xWiBNMzYgMTMgaDEgdjEgaC0xWiBNNiAxNCBoMSB2MSBoLTFaIE03IDE0IGgxIHYxIGgtMVogTTkgMTQgaDEgdjEgaC0xWiBNMTEgMTQgaDEgdjEgaC0xWiBNMTIgMTQgaDEgdjEgaC0xWiBNMTMgMTQgaDEgdjEgaC0xWiBNMTYgMTQgaDEgdjEgaC0xWiBNMTggMTQgaDEgdjEgaC0xWiBNMjEgMTQgaDEgdjEgaC0xWiBNMjMgMTQgaDEgdjEgaC0xWiBNMjUgMTQgaDEgdjEgaC0xWiBNMjYgMTQgaDEgdjEgaC0xWiBNMjggMTQgaDEgdjEgaC0xWiBNMzEgMTQgaDEgdjEgaC0xWiBNMzMgMTQgaDEgdjEgaC0xWiBNNiAxNSBoMSB2MSBoLTFaIE03IDE1IGgxIHYxIGgtMVogTTggMTUgaDEgdjEgaC0xWiBNOSAxNSBoMSB2MSBoLTFaIE0xMiAxNSBoMSB2MSBoLTFaIE0xNyAxNSBoMSB2MSBoLTFaIE0xOCAxNSBoMSB2MSBoLTFaIE0xOSAxNSBoMSB2MSBoLTFaIE0yMCAxNSBoMSB2MSBoLTFaIE0yMiAxNSBoMSB2MSBoLTFaIE0yNSAxNSBoMSB2MSBoLTFaIE0yOCAxNSBoMSB2MSBoLTFaIE0yOSAxNSBoMSB2MSBoLTFaIE0zMCAxNSBoMSB2MSBoLTFaCk0zMiAxNSBoMSB2MSBoLTFaIE0zMyAxNSBoMSB2MSBoLTFaIE0zNiAxNSBoMSB2MSBoLTFaIE03IDE2IGgxIHYxIGgtMVogTTE0IDE2IGgxIHYxIGgtMVogTTE3IDE2IGgxIHYxIGgtMVogTTE4IDE2IGgxIHYxIGgtMVogTTIxIDE2IGgxIHYxIGgtMVogTTIyIDE2IGgxIHYxIGgtMVogTTIzIDE2IGgxIHYxIGgtMVogTTI2IDE2IGgxIHYxIGgtMVogTTI5IDE2IGgxIHYxIGgtMVogTTMyIDE2IGgxIHYxIGgtMVogTTMzIDE2IGgxIHYxIGgtMVogTTM0IDE2IGgxIHYxIGgtMVogTTQgMTcgaDEgdjEgaC0xWiBNMTQgMTcgaDEgdjEgaC0xWiBNMTUgMTcgaDEgdjEgaC0xWiBNMTYgMTcgaDEgdjEgaC0xWiBNMTcgMTcgaDEgdjEgaC0xWiBNMjEgMTcgaDEgdjEgaC0xWiBNMjIgMTcgaDEgdjEgaC0xWiBNMjQgMTcgaDEgdjEgaC0xWiBNMjggMTcgaDEgdjEgaC0xWiBNMzAgMTcgaDEgdjEgaC0xWiBNMzEgMTcgaDEgdjEgaC0xWiBNMzIgMTcgaDEgdjEgaC0xWiBNMzYgMTcgaDEgdjEgaC0xWiBNNCAxOCBoMSB2MSBoLTFaIE02IDE4IGgxIHYxIGgtMVogTTExIDE4IGgxIHYxIGgtMVogTTE0IDE4IGgxIHYxIGgtMVogTTE3IDE4IGgxIHYxIGgtMVogTTI0IDE4IGgxIHYxIGgtMVogTTI3IDE4IGgxIHYxIGgtMVogTTI5IDE4IGgxIHYxIGgtMVogTTMwIDE4IGgxIHYxIGgtMVogTTMzIDE4IGgxIHYxIGgtMVogTTM1IDE4IGgxIHYxIGgtMVogTTM2IDE4IGgxIHYxIGgtMVogTTggMTkgaDEgdjEgaC0xWiBNMTIgMTkgaDEgdjEgaC0xWiBNMTMgMTkgaDEgdjEgaC0xWiBNMTQgMTkgaDEgdjEgaC0xWiBNMTYgMTkgaDEgdjEgaC0xWiBNMTcgMTkgaDEgdjEgaC0xWiBNMTkgMTkgaDEgdjEgaC0xWiBNMjAgMTkgaDEgdjEgaC0xWiBNMjEgMTkgaDEgdjEgaC0xWiBNMjIgMTkgaDEgdjEgaC0xWiBNMjMgMTkgaDEgdjEgaC0xWiBNMjUgMTkgaDEgdjEgaC0xWiBNMzEgMTkgaDEgdjEgaC0xWiBNMzUgMTkgaDEgdjEgaC0xWiBNNSAyMCBoMSB2MSBoLTFaIE02IDIwIGgxIHYxIGgtMVogTTcgMjAgaDEgdjEgaC0xWiBNOCAyMCBoMSB2MSBoLTFaIE05IDIwIGgxIHYxIGgtMVogTTEyIDIwIGgxIHYxIGgtMVogTTEzIDIwIGgxIHYxIGgtMVogTTE0IDIwIGgxIHYxIGgtMVogTTE1IDIwIGgxIHYxIGgtMVogTTE2IDIwIGgxIHYxIGgtMVogTTE4IDIwIGgxIHYxIGgtMVogTTE5IDIwIGgxIHYxIGgtMVogTTIwIDIwIGgxIHYxIGgtMVogTTIxIDIwIGgxIHYxIGgtMVogTTIyIDIwIGgxIHYxIGgtMVogTTI0IDIwIGgxIHYxIGgtMVogTTI1IDIwIGgxIHYxIGgtMVogTTI2IDIwIGgxIHYxIGgtMVogTTI4IDIwIGgxIHYxIGgtMVogTTMxIDIwIGgxIHYxIGgtMVogTTM0IDIwIGgxIHYxIGgtMVogTTM1IDIwIGgxIHYxIGgtMVogTTQgMjEgaDEgdjEgaC0xWiBNNSAyMSBoMSB2MSBoLTFaIE02IDIxIGgxIHYxIGgtMVogTTggMjEgaDEgdjEgaC0xWiBNOSAyMSBoMSB2MSBoLTFaIE0xMSAyMSBoMSB2MSBoLTFaIE0xMiAyMSBoMSB2MSBoLTFaIE0xMyAyMSBoMSB2MSBoLTFaIE0xNCAyMSBoMSB2MSBoLTFaIE0xNyAyMSBoMSB2MSBoLTFaIE0xOCAyMSBoMSB2MSBoLTFaIE0yMCAyMSBoMSB2MSBoLTFaIE0yMiAyMSBoMSB2MSBoLTFaIE0yMyAyMSBoMSB2MSBoLTFaIE0yNSAyMSBoMSB2MSBoLTFaIE0yNiAyMSBoMSB2MSBoLTFaIE0yNyAyMSBoMSB2MSBoLTFaIE0yOCAyMSBoMSB2MSBoLTFaIE0zNCAyMSBoMSB2MSBoLTFaIE02IDIyIGgxIHYxIGgtMVogTTcgMjIgaDEgdjEgaC0xWiBNMTEgMjIgaDEgdjEgaC0xWiBNMTYgMjIgaDEgdjEgaC0xWiBNMTggMjIgaDEgdjEgaC0xWgpNMjIgMjIgaDEgdjEgaC0xWiBNMjYgMjIgaDEgdjEgaC0xWiBNMjggMjIgaDEgdjEgaC0xWiBNMzUgMjIgaDEgdjEgaC0xWiBNNSAyMyBoMSB2MSBoLTFaIE03IDIzIGgxIHYxIGgtMVogTTkgMjMgaDEgdjEgaC0xWiBNMTEgMjMgaDEgdjEgaC0xWiBNMTQgMjMgaDEgdjEgaC0xWiBNMTUgMjMgaDEgdjEgaC0xWiBNMTggMjMgaDEgdjEgaC0xWiBNMTkgMjMgaDEgdjEgaC0xWiBNMjEgMjMgaDEgdjEgaC0xWiBNMjIgMjMgaDEgdjEgaC0xWiBNMjMgMjMgaDEgdjEgaC0xWiBNMjQgMjMgaDEgdjEgaC0xWiBNMjUgMjMgaDEgdjEgaC0xWiBNMjYgMjMgaDEgdjEgaC0xWiBNMjkgMjMgaDEgdjEgaC0xWiBNMzAgMjMgaDEgdjEgaC0xWiBNMzIgMjMgaDEgdjEgaC0xWiBNMzMgMjMgaDEgdjEgaC0xWiBNNSAyNCBoMSB2MSBoLTFaIE02IDI0IGgxIHYxIGgtMVogTTcgMjQgaDEgdjEgaC0xWiBNOCAyNCBoMSB2MSBoLTFaIE05IDI0IGgxIHYxIGgtMVogTTE1IDI0IGgxIHYxIGgtMVogTTE3IDI0IGgxIHYxIGgtMVogTTE5IDI0IGgxIHYxIGgtMVogTTIyIDI0IGgxIHYxIGgtMVogTTIzIDI0IGgxIHYxIGgtMVogTTI0IDI0IGgxIHYxIGgtMVogTTI2IDI0IGgxIHYxIGgtMVogTTI3IDI0IGgxIHYxIGgtMVogTTI5IDI0IGgxIHYxIGgtMVogTTMwIDI0IGgxIHYxIGgtMVogTTMxIDI0IGgxIHYxIGgtMVogTTMyIDI0IGgxIHYxIGgtMVogTTM0IDI0IGgxIHYxIGgtMVogTTM1IDI0IGgxIHYxIGgtMVogTTM2IDI0IGgxIHYxIGgtMVogTTYgMjUgaDEgdjEgaC0xWiBNOSAyNSBoMSB2MSBoLTFaIE0xMSAyNSBoMSB2MSBoLTFaIE0xMyAyNSBoMSB2MSBoLTFaIE0xNSAyNSBoMSB2MSBoLTFaIE0xNiAyNSBoMSB2MSBoLTFaIE0xNyAyNSBoMSB2MSBoLTFaIE0xOCAyNSBoMSB2MSBoLTFaIE0yMCAyNSBoMSB2MSBoLTFaIE0yMSAyNSBoMSB2MSBoLTFaIE0yMyAyNSBoMSB2MSBoLTFaIE0yNCAyNSBoMSB2MSBoLTFaIE0yNSAyNSBoMSB2MSBoLTFaIE0yNiAyNSBoMSB2MSBoLTFaIE0yOCAyNSBoMSB2MSBoLTFaIE0zMCAyNSBoMSB2MSBoLTFaIE0zMyAyNSBoMSB2MSBoLTFaIE0zNCAyNSBoMSB2MSBoLTFaIE0zNiAyNSBoMSB2MSBoLTFaIE01IDI2IGgxIHYxIGgtMVogTTcgMjYgaDEgdjEgaC0xWiBNOSAyNiBoMSB2MSBoLTFaIE0xNSAyNiBoMSB2MSBoLTFaIE0xNyAyNiBoMSB2MSBoLTFaIE0xOCAyNiBoMSB2MSBoLTFaIE0yMiAyNiBoMSB2MSBoLTFaIE0yMyAyNiBoMSB2MSBoLTFaIE0yNSAyNiBoMSB2MSBoLTFaIE0yOCAyNiBoMSB2MSBoLTFaIE0zMSAyNiBoMSB2MSBoLTFaIE0zNCAyNiBoMSB2MSBoLTFaIE01IDI3IGgxIHYxIGgtMVogTTYgMjcgaDEgdjEgaC0xWiBNMTEgMjcgaDEgdjEgaC0xWiBNMTIgMjcgaDEgdjEgaC0xWiBNMTUgMjcgaDEgdjEgaC0xWiBNMTYgMjcgaDEgdjEgaC0xWiBNMTcgMjcgaDEgdjEgaC0xWiBNMTggMjcgaDEgdjEgaC0xWiBNMTkgMjcgaDEgdjEgaC0xWiBNMjIgMjcgaDEgdjEgaC0xWiBNMjUgMjcgaDEgdjEgaC0xWiBNMjggMjcgaDEgdjEgaC0xWiBNMjkgMjcgaDEgdjEgaC0xWiBNMzAgMjcgaDEgdjEgaC0xWiBNMzIgMjcgaDEgdjEgaC0xWiBNNiAyOCBoMSB2MSBoLTFaIE04IDI4IGgxIHYxIGgtMVogTTkgMjggaDEgdjEgaC0xWiBNMTEgMjggaDEgdjEgaC0xWiBNMTMgMjggaDEgdjEgaC0xWiBNMTQgMjggaDEgdjEgaC0xWiBNMTUgMjggaDEgdjEgaC0xWiBNMTYgMjggaDEgdjEgaC0xWiBNMTkgMjggaDEgdjEgaC0xWiBNMjEgMjggaDEgdjEgaC0xWiBNMjIgMjggaDEgdjEgaC0xWiBNMjQgMjggaDEgdjEgaC0xWgpNMjYgMjggaDEgdjEgaC0xWiBNMzQgMjggaDEgdjEgaC0xWiBNMzUgMjggaDEgdjEgaC0xWiBNMzYgMjggaDEgdjEgaC0xWiBNMTQgMjkgaDEgdjEgaC0xWiBNMTUgMjkgaDEgdjEgaC0xWiBNMTcgMjkgaDEgdjEgaC0xWiBNMjEgMjkgaDEgdjEgaC0xWiBNMjIgMjkgaDEgdjEgaC0xWiBNMjQgMjkgaDEgdjEgaC0xWiBNMjUgMjkgaDEgdjEgaC0xWiBNMjYgMjkgaDEgdjEgaC0xWiBNMjcgMjkgaDEgdjEgaC0xWiBNMzQgMjkgaDEgdjEgaC0xWiBNMzYgMjkgaDEgdjEgaC0xWiBNMTMgMzAgaDEgdjEgaC0xWiBNMTUgMzAgaDEgdjEgaC0xWiBNMTYgMzAgaDEgdjEgaC0xWiBNMTcgMzAgaDEgdjEgaC0xWiBNMjQgMzAgaDEgdjEgaC0xWiBNMjUgMzAgaDEgdjEgaC0xWiBNMzQgMzAgaDEgdjEgaC0xWiBNMzUgMzAgaDEgdjEgaC0xWiBNMzYgMzAgaDEgdjEgaC0xWiBNMTMgMzEgaDEgdjEgaC0xWiBNMTQgMzEgaDEgdjEgaC0xWiBNMTUgMzEgaDEgdjEgaC0xWiBNMTkgMzEgaDEgdjEgaC0xWiBNMjEgMzEgaDEgdjEgaC0xWiBNMjMgMzEgaDEgdjEgaC0xWiBNMjQgMzEgaDEgdjEgaC0xWiBNMjUgMzEgaDEgdjEgaC0xWiBNMjYgMzEgaDEgdjEgaC0xWiBNMzMgMzEgaDEgdjEgaC0xWiBNMTQgMzIgaDEgdjEgaC0xWiBNMTcgMzIgaDEgdjEgaC0xWiBNMTggMzIgaDEgdjEgaC0xWiBNMTkgMzIgaDEgdjEgaC0xWiBNMjAgMzIgaDEgdjEgaC0xWiBNMjEgMzIgaDEgdjEgaC0xWiBNMjMgMzIgaDEgdjEgaC0xWiBNMzQgMzIgaDEgdjEgaC0xWiBNMzUgMzIgaDEgdjEgaC0xWiBNMTMgMzMgaDEgdjEgaC0xWiBNMTQgMzMgaDEgdjEgaC0xWiBNMTYgMzMgaDEgdjEgaC0xWiBNMTcgMzMgaDEgdjEgaC0xWiBNMTggMzMgaDEgdjEgaC0xWiBNMjAgMzMgaDEgdjEgaC0xWiBNMjEgMzMgaDEgdjEgaC0xWiBNMjIgMzMgaDEgdjEgaC0xWiBNMjMgMzMgaDEgdjEgaC0xWiBNMjUgMzMgaDEgdjEgaC0xWiBNMjYgMzMgaDEgdjEgaC0xWiBNMjcgMzMgaDEgdjEgaC0xWiBNMjggMzMgaDEgdjEgaC0xWiBNMjkgMzMgaDEgdjEgaC0xWiBNMzAgMzMgaDEgdjEgaC0xWiBNMzEgMzMgaDEgdjEgaC0xWiBNMzIgMzMgaDEgdjEgaC0xWiBNMzMgMzMgaDEgdjEgaC0xWiBNMzQgMzMgaDEgdjEgaC0xWiBNMzUgMzMgaDEgdjEgaC0xWiBNMzYgMzMgaDEgdjEgaC0xWiBNMTMgMzQgaDEgdjEgaC0xWiBNMTUgMzQgaDEgdjEgaC0xWiBNMjAgMzQgaDEgdjEgaC0xWiBNMjIgMzQgaDEgdjEgaC0xWiBNMjUgMzQgaDEgdjEgaC0xWiBNMjYgMzQgaDEgdjEgaC0xWiBNMjkgMzQgaDEgdjEgaC0xWiBNMzAgMzQgaDEgdjEgaC0xWiBNMzEgMzQgaDEgdjEgaC0xWiBNMzMgMzQgaDEgdjEgaC0xWiBNMzQgMzQgaDEgdjEgaC0xWiBNMzUgMzQgaDEgdjEgaC0xWiBNMTQgMzUgaDEgdjEgaC0xWiBNMTYgMzUgaDEgdjEgaC0xWiBNMTggMzUgaDEgdjEgaC0xWiBNMjAgMzUgaDEgdjEgaC0xWiBNMjEgMzUgaDEgdjEgaC0xWiBNMjIgMzUgaDEgdjEgaC0xWiBNMjMgMzUgaDEgdjEgaC0xWiBNMjUgMzUgaDEgdjEgaC0xWiBNMjYgMzUgaDEgdjEgaC0xWiBNMjggMzUgaDEgdjEgaC0xWiBNMjkgMzUgaDEgdjEgaC0xWiBNMzAgMzUgaDEgdjEgaC0xWiBNMzEgMzUgaDEgdjEgaC0xWiBNMzIgMzUgaDEgdjEgaC0xWiBNMTYgMzYgaDEgdjEgaC0xWiBNMTggMzYgaDEgdjEgaC0xWiBNMjIgMzYgaDEgdjEgaC0xWiBNMjMgMzYgaDEgdjEgaC0xWiBNMjQgMzYgaDEgdjEgaC0xWiBNMjYgMzYgaDEgdjEgaC0xWiBNMjkgMzYgaDEgdjEgaC0xWiBNMzEgMzYgaDEgdjEgaC0xWiBNMzQgMzYgaDEgdjEgaC0xWiBNMzUgMzYgaDEgdjEgaC0xWgpNMzYgMzYgaDEgdjEgaC0xWiIvPgo8cGF0aCBjbGFzcz0icXItZmluZGVyIGxpZ2h0IHFyY29kZSIgZmlsbD0iI2ZmZiIgZD0iTTUgNSBoMSB2MSBoLTFaIE02IDUgaDEgdjEgaC0xWiBNNyA1IGgxIHYxIGgtMVogTTggNSBoMSB2MSBoLTFaIE05IDUgaDEgdjEgaC0xWiBNMzEgNSBoMSB2MSBoLTFaIE0zMiA1IGgxIHYxIGgtMVogTTMzIDUgaDEgdjEgaC0xWiBNMzQgNSBoMSB2MSBoLTFaIE0zNSA1IGgxIHYxIGgtMVogTTUgNiBoMSB2MSBoLTFaIE05IDYgaDEgdjEgaC0xWiBNMzEgNiBoMSB2MSBoLTFaIE0zNSA2IGgxIHYxIGgtMVogTTUgNyBoMSB2MSBoLTFaIE05IDcgaDEgdjEgaC0xWiBNMzEgNyBoMSB2MSBoLTFaIE0zNSA3IGgxIHYxIGgtMVogTTUgOCBoMSB2MSBoLTFaIE05IDggaDEgdjEgaC0xWiBNMzEgOCBoMSB2MSBoLTFaIE0zNSA4IGgxIHYxIGgtMVogTTUgOSBoMSB2MSBoLTFaIE02IDkgaDEgdjEgaC0xWiBNNyA5IGgxIHYxIGgtMVogTTggOSBoMSB2MSBoLTFaIE05IDkgaDEgdjEgaC0xWiBNMzEgOSBoMSB2MSBoLTFaIE0zMiA5IGgxIHYxIGgtMVogTTMzIDkgaDEgdjEgaC0xWiBNMzQgOSBoMSB2MSBoLTFaIE0zNSA5IGgxIHYxIGgtMVogTTUgMzEgaDEgdjEgaC0xWiBNNiAzMSBoMSB2MSBoLTFaIE03IDMxIGgxIHYxIGgtMVogTTggMzEgaDEgdjEgaC0xWiBNOSAzMSBoMSB2MSBoLTFaIE01IDMyIGgxIHYxIGgtMVogTTkgMzIgaDEgdjEgaC0xWiBNNSAzMyBoMSB2MSBoLTFaIE05IDMzIGgxIHYxIGgtMVogTTUgMzQgaDEgdjEgaC0xWiBNOSAzNCBoMSB2MSBoLTFaIE01IDM1IGgxIHYxIGgtMVogTTYgMzUgaDEgdjEgaC0xWiBNNyAzNSBoMSB2MSBoLTFaIE04IDM1IGgxIHYxIGgtMVogTTkgMzUgaDEgdjEgaC0xWiIvPgo8cGF0aCBjbGFzcz0icXItc2VwYXJhdG9yIGxpZ2h0IHFyY29kZSIgZmlsbD0iI2ZmZiIgZD0iTTExIDQgaDEgdjEgaC0xWiBNMjkgNCBoMSB2MSBoLTFaIE0xMSA1IGgxIHYxIGgtMVogTTI5IDUgaDEgdjEgaC0xWiBNMTEgNiBoMSB2MSBoLTFaIE0yOSA2IGgxIHYxIGgtMVogTTExIDcgaDEgdjEgaC0xWiBNMjkgNyBoMSB2MSBoLTFaIE0xMSA4IGgxIHYxIGgtMVogTTI5IDggaDEgdjEgaC0xWiBNMTEgOSBoMSB2MSBoLTFaIE0yOSA5IGgxIHYxIGgtMVogTTExIDEwIGgxIHYxIGgtMVogTTI5IDEwIGgxIHYxIGgtMVogTTQgMTEgaDEgdjEgaC0xWiBNNSAxMSBoMSB2MSBoLTFaIE02IDExIGgxIHYxIGgtMVogTTcgMTEgaDEgdjEgaC0xWiBNOCAxMSBoMSB2MSBoLTFaIE05IDExIGgxIHYxIGgtMVogTTEwIDExIGgxIHYxIGgtMVogTTExIDExIGgxIHYxIGgtMVogTTI5IDExIGgxIHYxIGgtMVogTTMwIDExIGgxIHYxIGgtMVogTTMxIDExIGgxIHYxIGgtMVogTTMyIDExIGgxIHYxIGgtMVogTTMzIDExIGgxIHYxIGgtMVogTTM0IDExIGgxIHYxIGgtMVogTTM1IDExIGgxIHYxIGgtMVogTTM2IDExIGgxIHYxIGgtMVogTTQgMjkgaDEgdjEgaC0xWiBNNSAyOSBoMSB2MSBoLTFaIE02IDI5IGgxIHYxIGgtMVogTTcgMjkgaDEgdjEgaC0xWiBNOCAyOSBoMSB2MSBoLTFaIE05IDI5IGgxIHYxIGgtMVogTTEwIDI5IGgxIHYxIGgtMVogTTExIDI5IGgxIHYxIGgtMVogTTExIDMwIGgxIHYxIGgtMVogTTExIDMxIGgxIHYxIGgtMVogTTExIDMyIGgxIHYxIGgtMVogTTExIDMzIGgxIHYxIGgtMVogTTExIDM0IGgxIHYxIGgtMVogTTExIDM1IGgxIHYxIGgtMVogTTExIDM2IGgxIHYxIGgtMVoiLz4KPHBhdGggY2xhc3M9InFyLWFsaWdubWVudCBsaWdodCBxcmNvZGUiIGZpbGw9IiNmZmYiIGQ9Ik0yOSAyOSBoMSB2MSBoLTFaIE0zMCAyOSBoMSB2MSBoLTFaIE0zMSAyOSBoMSB2MSBoLTFaIE0yOSAzMCBoMSB2MSBoLTFaIE0zMSAzMCBoMSB2MSBoLTFaIE0yOSAzMSBoMSB2MSBoLTFaIE0zMCAzMSBoMSB2MSBoLTFaIE0zMSAzMSBoMSB2MSBoLTFaIi8+CjxwYXRoIGNsYXNzPSJxci10aW1pbmcgbGlnaHQgcXJjb2RlIiBmaWxsPSIjZmZmIiBkPSJNMTMgMTAgaDEgdjEgaC0xWiBNMTUgMTAgaDEgdjEgaC0xWiBNMTcgMTAgaDEgdjEgaC0xWiBNMTkgMTAgaDEgdjEgaC0xWiBNMjEgMTAgaDEgdjEgaC0xWiBNMjMgMTAgaDEgdjEgaC0xWiBNMjUgMTAgaDEgdjEgaC0xWiBNMjcgMTAgaDEgdjEgaC0xWiBNMTAgMTMgaDEgdjEgaC0xWiBNMTAgMTUgaDEgdjEgaC0xWiBNMTAgMTcgaDEgdjEgaC0xWiBNMTAgMTkgaDEgdjEgaC0xWiBNMTAgMjEgaDEgdjEgaC0xWiBNMTAgMjMgaDEgdjEgaC0xWiBNMTAgMjUgaDEgdjEgaC0xWiBNMTAgMjcgaDEgdjEgaC0xWiIvPgo8cGF0aCBjbGFzcz0icXItZm9ybWF0IGxpZ2h0IHFyY29kZSIgZmlsbD0iI2ZmZiIgZD0iTTEyIDUgaDEgdjEgaC0xWiBNMTIgNiBoMSB2MSBoLTFaIE0xMiA3IGgxIHYxIGgtMVogTTEyIDggaDEgdjEgaC0xWiBNMTIgOSBoMSB2MSBoLTFaIE02IDEyIGgxIHYxIGgtMVogTTkgMTIgaDEgdjEgaC0xWiBNMTEgMTIgaDEgdjEgaC0xWiBNMTIgMTIgaDEgdjEgaC0xWiBNMjkgMTIgaDEgdjEgaC0xWiBNMzEgMTIgaDEgdjEgaC0xWiBNMzIgMTIgaDEgdjEgaC0xWiBNMzMgMTIgaDEgdjEgaC0xWiBNMzQgMTIgaDEgdjEgaC0xWiBNMzUgMTIgaDEgdjEgaC0xWiBNMTIgMzAgaDEgdjEgaC0xWiBNMTIgMzEgaDEgdjEgaC0xWiBNMTIgMzQgaDEgdjEgaC0xWiIvPgo8cGF0aCBjbGFzcz0icXItcXVpZXR6b25lIGxpZ2h0IHFyY29kZSIgZmlsbD0iI2ZmZiIgZD0iTTAgMCBoMSB2MSBoLTFaIE0xIDAgaDEgdjEgaC0xWiBNMiAwIGgxIHYxIGgtMVogTTMgMCBoMSB2MSBoLTFaIE00IDAgaDEgdjEgaC0xWiBNNSAwIGgxIHYxIGgtMVogTTYgMCBoMSB2MSBoLTFaIE03IDAgaDEgdjEgaC0xWiBNOCAwIGgxIHYxIGgtMVogTTkgMCBoMSB2MSBoLTFaIE0xMCAwIGgxIHYxIGgtMVogTTExIDAgaDEgdjEgaC0xWiBNMTIgMCBoMSB2MSBoLTFaIE0xMyAwIGgxIHYxIGgtMVogTTE0IDAgaDEgdjEgaC0xWiBNMTUgMCBoMSB2MSBoLTFaIE0xNiAwIGgxIHYxIGgtMVogTTE3IDAgaDEgdjEgaC0xWiBNMTggMCBoMSB2MSBoLTFaIE0xOSAwIGgxIHYxIGgtMVogTTIwIDAgaDEgdjEgaC0xWiBNMjEgMCBoMSB2MSBoLTFaIE0yMiAwIGgxIHYxIGgtMVogTTIzIDAgaDEgdjEgaC0xWiBNMjQgMCBoMSB2MSBoLTFaIE0yNSAwIGgxIHYxIGgtMVogTTI2IDAgaDEgdjEgaC0xWiBNMjcgMCBoMSB2MSBoLTFaIE0yOCAwIGgxIHYxIGgtMVogTTI5IDAgaDEgdjEgaC0xWiBNMzAgMCBoMSB2MSBoLTFaIE0zMSAwIGgxIHYxIGgtMVogTTMyIDAgaDEgdjEgaC0xWiBNMzMgMCBoMSB2MSBoLTFaIE0zNCAwIGgxIHYxIGgtMVogTTM1IDAgaDEgdjEgaC0xWiBNMzYgMCBoMSB2MSBoLTFaIE0zNyAwIGgxIHYxIGgtMVogTTM4IDAgaDEgdjEgaC0xWiBNMzkgMCBoMSB2MSBoLTFaIE00MCAwIGgxIHYxIGgtMVogTTAgMSBoMSB2MSBoLTFaIE0xIDEgaDEgdjEgaC0xWiBNMiAxIGgxIHYxIGgtMVogTTMgMSBoMSB2MSBoLTFaIE00IDEgaDEgdjEgaC0xWiBNNSAxIGgxIHYxIGgtMVogTTYgMSBoMSB2MSBoLTFaIE03IDEgaDEgdjEgaC0xWiBNOCAxIGgxIHYxIGgtMVogTTkgMSBoMSB2MSBoLTFaIE0xMCAxIGgxIHYxIGgtMVogTTExIDEgaDEgdjEgaC0xWiBNMTIgMSBoMSB2MSBoLTFaIE0xMyAxIGgxIHYxIGgtMVogTTE0IDEgaDEgdjEgaC0xWiBNMTUgMSBoMSB2MSBoLTFaIE0xNiAxIGgxIHYxIGgtMVogTTE3IDEgaDEgdjEgaC0xWiBNMTggMSBoMSB2MSBoLTFaIE0xOSAxIGgxIHYxIGgtMVogTTIwIDEgaDEgdjEgaC0xWiBNMjEgMSBoMSB2MSBoLTFaIE0yMiAxIGgxIHYxIGgtMVogTTIzIDEgaDEgdjEgaC0xWiBNMjQgMSBoMSB2MSBoLTFaIE0yNSAxIGgxIHYxIGgtMVogTTI2IDEgaDEgdjEgaC0xWiBNMjcgMSBoMSB2MSBoLTFaIE0yOCAxIGgxIHYxIGgtMVogTTI5IDEgaDEgdjEgaC0xWiBNMzAgMSBoMSB2MSBoLTFaIE0zMSAxIGgxIHYxIGgtMVogTTMyIDEgaDEgdjEgaC0xWiBNMzMgMSBoMSB2MSBoLTFaIE0zNCAxIGgxIHYxIGgtMVogTTM1IDEgaDEgdjEgaC0xWiBNMzYgMSBoMSB2MSBoLTFaIE0zNyAxIGgxIHYxIGgtMVogTTM4IDEgaDEgdjEgaC0xWiBNMzkgMSBoMSB2MSBoLTFaIE00MCAxIGgxIHYxIGgtMVogTTAgMiBoMSB2MSBoLTFaIE0xIDIgaDEgdjEgaC0xWiBNMiAyIGgxIHYxIGgtMVogTTMgMiBoMSB2MSBoLTFaIE00IDIgaDEgdjEgaC0xWiBNNSAyIGgxIHYxIGgtMVogTTYgMiBoMSB2MSBoLTFaIE03IDIgaDEgdjEgaC0xWiBNOCAyIGgxIHYxIGgtMVogTTkgMiBoMSB2MSBoLTFaIE0xMCAyIGgxIHYxIGgtMVogTTExIDIgaDEgdjEgaC0xWiBNMTIgMiBoMSB2MSBoLTFaIE0xMyAyIGgxIHYxIGgtMVogTTE0IDIgaDEgdjEgaC0xWiBNMTUgMiBoMSB2MSBoLTFaIE0xNiAyIGgxIHYxIGgtMVogTTE3IDIgaDEgdjEgaC0xWgpNMTggMiBoMSB2MSBoLTFaIE0xOSAyIGgxIHYxIGgtMVogTTIwIDIgaDEgdjEgaC0xWiBNMjEgMiBoMSB2MSBoLTFaIE0yMiAyIGgxIHYxIGgtMVogTTIzIDIgaDEgdjEgaC0xWiBNMjQgMiBoMSB2MSBoLTFaIE0yNSAyIGgxIHYxIGgtMVogTTI2IDIgaDEgdjEgaC0xWiBNMjcgMiBoMSB2MSBoLTFaIE0yOCAyIGgxIHYxIGgtMVogTTI5IDIgaDEgdjEgaC0xWiBNMzAgMiBoMSB2MSBoLTFaIE0zMSAyIGgxIHYxIGgtMVogTTMyIDIgaDEgdjEgaC0xWiBNMzMgMiBoMSB2MSBoLTFaIE0zNCAyIGgxIHYxIGgtMVogTTM1IDIgaDEgdjEgaC0xWiBNMzYgMiBoMSB2MSBoLTFaIE0zNyAyIGgxIHYxIGgtMVogTTM4IDIgaDEgdjEgaC0xWiBNMzkgMiBoMSB2MSBoLTFaIE00MCAyIGgxIHYxIGgtMVogTTAgMyBoMSB2MSBoLTFaIE0xIDMgaDEgdjEgaC0xWiBNMiAzIGgxIHYxIGgtMVogTTMgMyBoMSB2MSBoLTFaIE00IDMgaDEgdjEgaC0xWiBNNSAzIGgxIHYxIGgtMVogTTYgMyBoMSB2MSBoLTFaIE03IDMgaDEgdjEgaC0xWiBNOCAzIGgxIHYxIGgtMVogTTkgMyBoMSB2MSBoLTFaIE0xMCAzIGgxIHYxIGgtMVogTTExIDMgaDEgdjEgaC0xWiBNMTIgMyBoMSB2MSBoLTFaIE0xMyAzIGgxIHYxIGgtMVogTTE0IDMgaDEgdjEgaC0xWiBNMTUgMyBoMSB2MSBoLTFaIE0xNiAzIGgxIHYxIGgtMVogTTE3IDMgaDEgdjEgaC0xWiBNMTggMyBoMSB2MSBoLTFaIE0xOSAzIGgxIHYxIGgtMVogTTIwIDMgaDEgdjEgaC0xWiBNMjEgMyBoMSB2MSBoLTFaIE0yMiAzIGgxIHYxIGgtMVogTTIzIDMgaDEgdjEgaC0xWiBNMjQgMyBoMSB2MSBoLTFaIE0yNSAzIGgxIHYxIGgtMVogTTI2IDMgaDEgdjEgaC0xWiBNMjcgMyBoMSB2MSBoLTFaIE0yOCAzIGgxIHYxIGgtMVogTTI5IDMgaDEgdjEgaC0xWiBNMzAgMyBoMSB2MSBoLTFaIE0zMSAzIGgxIHYxIGgtMVogTTMyIDMgaDEgdjEgaC0xWiBNMzMgMyBoMSB2MSBoLTFaIE0zNCAzIGgxIHYxIGgtMVogTTM1IDMgaDEgdjEgaC0xWiBNMzYgMyBoMSB2MSBoLTFaIE0zNyAzIGgxIHYxIGgtMVogTTM4IDMgaDEgdjEgaC0xWiBNMzkgMyBoMSB2MSBoLTFaIE00MCAzIGgxIHYxIGgtMVogTTAgNCBoMSB2MSBoLTFaIE0xIDQgaDEgdjEgaC0xWiBNMiA0IGgxIHYxIGgtMVogTTMgNCBoMSB2MSBoLTFaIE0zNyA0IGgxIHYxIGgtMVogTTM4IDQgaDEgdjEgaC0xWiBNMzkgNCBoMSB2MSBoLTFaIE00MCA0IGgxIHYxIGgtMVogTTAgNSBoMSB2MSBoLTFaIE0xIDUgaDEgdjEgaC0xWiBNMiA1IGgxIHYxIGgtMVogTTMgNSBoMSB2MSBoLTFaIE0zNyA1IGgxIHYxIGgtMVogTTM4IDUgaDEgdjEgaC0xWiBNMzkgNSBoMSB2MSBoLTFaIE00MCA1IGgxIHYxIGgtMVogTTAgNiBoMSB2MSBoLTFaIE0xIDYgaDEgdjEgaC0xWiBNMiA2IGgxIHYxIGgtMVogTTMgNiBoMSB2MSBoLTFaIE0zNyA2IGgxIHYxIGgtMVogTTM4IDYgaDEgdjEgaC0xWiBNMzkgNiBoMSB2MSBoLTFaIE00MCA2IGgxIHYxIGgtMVogTTAgNyBoMSB2MSBoLTFaIE0xIDcgaDEgdjEgaC0xWiBNMiA3IGgxIHYxIGgtMVogTTMgNyBoMSB2MSBoLTFaIE0zNyA3IGgxIHYxIGgtMVogTTM4IDcgaDEgdjEgaC0xWiBNMzkgNyBoMSB2MSBoLTFaIE00MCA3IGgxIHYxIGgtMVogTTAgOCBoMSB2MSBoLTFaIE0xIDggaDEgdjEgaC0xWiBNMiA4IGgxIHYxIGgtMVogTTMgOCBoMSB2MSBoLTFaCk0zNyA4IGgxIHYxIGgtMVogTTM4IDggaDEgdjEgaC0xWiBNMzkgOCBoMSB2MSBoLTFaIE00MCA4IGgxIHYxIGgtMVogTTAgOSBoMSB2MSBoLTFaIE0xIDkgaDEgdjEgaC0xWiBNMiA5IGgxIHYxIGgtMVogTTMgOSBoMSB2MSBoLTFaIE0zNyA5IGgxIHYxIGgtMVogTTM4IDkgaDEgdjEgaC0xWiBNMzkgOSBoMSB2MSBoLTFaIE00MCA5IGgxIHYxIGgtMVogTTAgMTAgaDEgdjEgaC0xWiBNMSAxMCBoMSB2MSBoLTFaIE0yIDEwIGgxIHYxIGgtMVogTTMgMTAgaDEgdjEgaC0xWiBNMzcgMTAgaDEgdjEgaC0xWiBNMzggMTAgaDEgdjEgaC0xWiBNMzkgMTAgaDEgdjEgaC0xWiBNNDAgMTAgaDEgdjEgaC0xWiBNMCAxMSBoMSB2MSBoLTFaIE0xIDExIGgxIHYxIGgtMVogTTIgMTEgaDEgdjEgaC0xWiBNMyAxMSBoMSB2MSBoLTFaIE0zNyAxMSBoMSB2MSBoLTFaIE0zOCAxMSBoMSB2MSBoLTFaIE0zOSAxMSBoMSB2MSBoLTFaIE00MCAxMSBoMSB2MSBoLTFaIE0wIDEyIGgxIHYxIGgtMVogTTEgMTIgaDEgdjEgaC0xWiBNMiAxMiBoMSB2MSBoLTFaIE0zIDEyIGgxIHYxIGgtMVogTTM3IDEyIGgxIHYxIGgtMVogTTM4IDEyIGgxIHYxIGgtMVogTTM5IDEyIGgxIHYxIGgtMVogTTQwIDEyIGgxIHYxIGgtMVogTTAgMTMgaDEgdjEgaC0xWiBNMSAxMyBoMSB2MSBoLTFaIE0yIDEzIGgxIHYxIGgtMVogTTMgMTMgaDEgdjEgaC0xWiBNMzcgMTMgaDEgdjEgaC0xWiBNMzggMTMgaDEgdjEgaC0xWiBNMzkgMTMgaDEgdjEgaC0xWiBNNDAgMTMgaDEgdjEgaC0xWiBNMCAxNCBoMSB2MSBoLTFaIE0xIDE0IGgxIHYxIGgtMVogTTIgMTQgaDEgdjEgaC0xWiBNMyAxNCBoMSB2MSBoLTFaIE0zNyAxNCBoMSB2MSBoLTFaIE0zOCAxNCBoMSB2MSBoLTFaIE0zOSAxNCBoMSB2MSBoLTFaIE00MCAxNCBoMSB2MSBoLTFaIE0wIDE1IGgxIHYxIGgtMVogTTEgMTUgaDEgdjEgaC0xWiBNMiAxNSBoMSB2MSBoLTFaIE0zIDE1IGgxIHYxIGgtMVogTTM3IDE1IGgxIHYxIGgtMVogTTM4IDE1IGgxIHYxIGgtMVogTTM5IDE1IGgxIHYxIGgtMVogTTQwIDE1IGgxIHYxIGgtMVogTTAgMTYgaDEgdjEgaC0xWiBNMSAxNiBoMSB2MSBoLTFaIE0yIDE2IGgxIHYxIGgtMVogTTMgMTYgaDEgdjEgaC0xWiBNMzcgMTYgaDEgdjEgaC0xWiBNMzggMTYgaDEgdjEgaC0xWiBNMzkgMTYgaDEgdjEgaC0xWiBNNDAgMTYgaDEgdjEgaC0xWiBNMCAxNyBoMSB2MSBoLTFaIE0xIDE3IGgxIHYxIGgtMVogTTIgMTcgaDEgdjEgaC0xWiBNMyAxNyBoMSB2MSBoLTFaIE0zNyAxNyBoMSB2MSBoLTFaIE0zOCAxNyBoMSB2MSBoLTFaIE0zOSAxNyBoMSB2MSBoLTFaIE00MCAxNyBoMSB2MSBoLTFaIE0wIDE4IGgxIHYxIGgtMVogTTEgMTggaDEgdjEgaC0xWiBNMiAxOCBoMSB2MSBoLTFaIE0zIDE4IGgxIHYxIGgtMVogTTM3IDE4IGgxIHYxIGgtMVogTTM4IDE4IGgxIHYxIGgtMVogTTM5IDE4IGgxIHYxIGgtMVogTTQwIDE4IGgxIHYxIGgtMVogTTAgMTkgaDEgdjEgaC0xWiBNMSAxOSBoMSB2MSBoLTFaIE0yIDE5IGgxIHYxIGgtMVogTTMgMTkgaDEgdjEgaC0xWiBNMzcgMTkgaDEgdjEgaC0xWiBNMzggMTkgaDEgdjEgaC0xWiBNMzkgMTkgaDEgdjEgaC0xWiBNNDAgMTkgaDEgdjEgaC0xWiBNMCAyMCBoMSB2MSBoLTFaIE0xIDIwIGgxIHYxIGgtMVogTTIgMjAgaDEgdjEgaC0xWiBNMyAyMCBoMSB2MSBoLTFaIE0zNyAyMCBoMSB2MSBoLTFaIE0zOCAyMCBoMSB2MSBoLTFaIE0zOSAyMCBoMSB2MSBoLTFaIE00MCAyMCBoMSB2MSBoLTFaCk0wIDIxIGgxIHYxIGgtMVogTTEgMjEgaDEgdjEgaC0xWiBNMiAyMSBoMSB2MSBoLTFaIE0zIDIxIGgxIHYxIGgtMVogTTM3IDIxIGgxIHYxIGgtMVogTTM4IDIxIGgxIHYxIGgtMVogTTM5IDIxIGgxIHYxIGgtMVogTTQwIDIxIGgxIHYxIGgtMVogTTAgMjIgaDEgdjEgaC0xWiBNMSAyMiBoMSB2MSBoLTFaIE0yIDIyIGgxIHYxIGgtMVogTTMgMjIgaDEgdjEgaC0xWiBNMzcgMjIgaDEgdjEgaC0xWiBNMzggMjIgaDEgdjEgaC0xWiBNMzkgMjIgaDEgdjEgaC0xWiBNNDAgMjIgaDEgdjEgaC0xWiBNMCAyMyBoMSB2MSBoLTFaIE0xIDIzIGgxIHYxIGgtMVogTTIgMjMgaDEgdjEgaC0xWiBNMyAyMyBoMSB2MSBoLTFaIE0zNyAyMyBoMSB2MSBoLTFaIE0zOCAyMyBoMSB2MSBoLTFaIE0zOSAyMyBoMSB2MSBoLTFaIE00MCAyMyBoMSB2MSBoLTFaIE0wIDI0IGgxIHYxIGgtMVogTTEgMjQgaDEgdjEgaC0xWiBNMiAyNCBoMSB2MSBoLTFaIE0zIDI0IGgxIHYxIGgtMVogTTM3IDI0IGgxIHYxIGgtMVogTTM4IDI0IGgxIHYxIGgtMVogTTM5IDI0IGgxIHYxIGgtMVogTTQwIDI0IGgxIHYxIGgtMVogTTAgMjUgaDEgdjEgaC0xWiBNMSAyNSBoMSB2MSBoLTFaIE0yIDI1IGgxIHYxIGgtMVogTTMgMjUgaDEgdjEgaC0xWiBNMzcgMjUgaDEgdjEgaC0xWiBNMzggMjUgaDEgdjEgaC0xWiBNMzkgMjUgaDEgdjEgaC0xWiBNNDAgMjUgaDEgdjEgaC0xWiBNMCAyNiBoMSB2MSBoLTFaIE0xIDI2IGgxIHYxIGgtMVogTTIgMjYgaDEgdjEgaC0xWiBNMyAyNiBoMSB2MSBoLTFaIE0zNyAyNiBoMSB2MSBoLTFaIE0zOCAyNiBoMSB2MSBoLTFaIE0zOSAyNiBoMSB2MSBoLTFaIE00MCAyNiBoMSB2MSBoLTFaIE0wIDI3IGgxIHYxIGgtMVogTTEgMjcgaDEgdjEgaC0xWiBNMiAyNyBoMSB2MSBoLTFaIE0zIDI3IGgxIHYxIGgtMVogTTM3IDI3IGgxIHYxIGgtMVogTTM4IDI3IGgxIHYxIGgtMVogTTM5IDI3IGgxIHYxIGgtMVogTTQwIDI3IGgxIHYxIGgtMVogTTAgMjggaDEgdjEgaC0xWiBNMSAyOCBoMSB2MSBoLTFaIE0yIDI4IGgxIHYxIGgtMVogTTMgMjggaDEgdjEgaC0xWiBNMzcgMjggaDEgdjEgaC0xWiBNMzggMjggaDEgdjEgaC0xWiBNMzkgMjggaDEgdjEgaC0xWiBNNDAgMjggaDEgdjEgaC0xWiBNMCAyOSBoMSB2MSBoLTFaIE0xIDI5IGgxIHYxIGgtMVogTTIgMjkgaDEgdjEgaC0xWiBNMyAyOSBoMSB2MSBoLTFaIE0zNyAyOSBoMSB2MSBoLTFaIE0zOCAyOSBoMSB2MSBoLTFaIE0zOSAyOSBoMSB2MSBoLTFaIE00MCAyOSBoMSB2MSBoLTFaIE0wIDMwIGgxIHYxIGgtMVogTTEgMzAgaDEgdjEgaC0xWiBNMiAzMCBoMSB2MSBoLTFaIE0zIDMwIGgxIHYxIGgtMVogTTM3IDMwIGgxIHYxIGgtMVogTTM4IDMwIGgxIHYxIGgtMVogTTM5IDMwIGgxIHYxIGgtMVogTTQwIDMwIGgxIHYxIGgtMVogTTAgMzEgaDEgdjEgaC0xWiBNMSAzMSBoMSB2MSBoLTFaIE0yIDMxIGgxIHYxIGgtMVogTTMgMzEgaDEgdjEgaC0xWiBNMzcgMzEgaDEgdjEgaC0xWiBNMzggMzEgaDEgdjEgaC0xWiBNMzkgMzEgaDEgdjEgaC0xWiBNNDAgMzEgaDEgdjEgaC0xWiBNMCAzMiBoMSB2MSBoLTFaIE0xIDMyIGgxIHYxIGgtMVogTTIgMzIgaDEgdjEgaC0xWiBNMyAzMiBoMSB2MSBoLTFaIE0zNyAzMiBoMSB2MSBoLTFaIE0zOCAzMiBoMSB2MSBoLTFaIE0zOSAzMiBoMSB2MSBoLTFaIE00MCAzMiBoMSB2MSBoLTFaIE0wIDMzIGgxIHYxIGgtMVogTTEgMzMgaDEgdjEgaC0xWiBNMiAzMyBoMSB2MSBoLTFaIE0zIDMzIGgxIHYxIGgtMVoKTTM3IDMzIGgxIHYxIGgtMVogTTM4IDMzIGgxIHYxIGgtMVogTTM5IDMzIGgxIHYxIGgtMVogTTQwIDMzIGgxIHYxIGgtMVogTTAgMzQgaDEgdjEgaC0xWiBNMSAzNCBoMSB2MSBoLTFaIE0yIDM0IGgxIHYxIGgtMVogTTMgMzQgaDEgdjEgaC0xWiBNMzcgMzQgaDEgdjEgaC0xWiBNMzggMzQgaDEgdjEgaC0xWiBNMzkgMzQgaDEgdjEgaC0xWiBNNDAgMzQgaDEgdjEgaC0xWiBNMCAzNSBoMSB2MSBoLTFaIE0xIDM1IGgxIHYxIGgtMVogTTIgMzUgaDEgdjEgaC0xWiBNMyAzNSBoMSB2MSBoLTFaIE0zNyAzNSBoMSB2MSBoLTFaIE0zOCAzNSBoMSB2MSBoLTFaIE0zOSAzNSBoMSB2MSBoLTFaIE00MCAzNSBoMSB2MSBoLTFaIE0wIDM2IGgxIHYxIGgtMVogTTEgMzYgaDEgdjEgaC0xWiBNMiAzNiBoMSB2MSBoLTFaIE0zIDM2IGgxIHYxIGgtMVogTTM3IDM2IGgxIHYxIGgtMVogTTM4IDM2IGgxIHYxIGgtMVogTTM5IDM2IGgxIHYxIGgtMVogTTQwIDM2IGgxIHYxIGgtMVogTTAgMzcgaDEgdjEgaC0xWiBNMSAzNyBoMSB2MSBoLTFaIE0yIDM3IGgxIHYxIGgtMVogTTMgMzcgaDEgdjEgaC0xWiBNNCAzNyBoMSB2MSBoLTFaIE01IDM3IGgxIHYxIGgtMVogTTYgMzcgaDEgdjEgaC0xWiBNNyAzNyBoMSB2MSBoLTFaIE04IDM3IGgxIHYxIGgtMVogTTkgMzcgaDEgdjEgaC0xWiBNMTAgMzcgaDEgdjEgaC0xWiBNMTEgMzcgaDEgdjEgaC0xWiBNMTIgMzcgaDEgdjEgaC0xWiBNMTMgMzcgaDEgdjEgaC0xWiBNMTQgMzcgaDEgdjEgaC0xWiBNMTUgMzcgaDEgdjEgaC0xWiBNMTYgMzcgaDEgdjEgaC0xWiBNMTcgMzcgaDEgdjEgaC0xWiBNMTggMzcgaDEgdjEgaC0xWiBNMTkgMzcgaDEgdjEgaC0xWiBNMjAgMzcgaDEgdjEgaC0xWiBNMjEgMzcgaDEgdjEgaC0xWiBNMjIgMzcgaDEgdjEgaC0xWiBNMjMgMzcgaDEgdjEgaC0xWiBNMjQgMzcgaDEgdjEgaC0xWiBNMjUgMzcgaDEgdjEgaC0xWiBNMjYgMzcgaDEgdjEgaC0xWiBNMjcgMzcgaDEgdjEgaC0xWiBNMjggMzcgaDEgdjEgaC0xWiBNMjkgMzcgaDEgdjEgaC0xWiBNMzAgMzcgaDEgdjEgaC0xWiBNMzEgMzcgaDEgdjEgaC0xWiBNMzIgMzcgaDEgdjEgaC0xWiBNMzMgMzcgaDEgdjEgaC0xWiBNMzQgMzcgaDEgdjEgaC0xWiBNMzUgMzcgaDEgdjEgaC0xWiBNMzYgMzcgaDEgdjEgaC0xWiBNMzcgMzcgaDEgdjEgaC0xWiBNMzggMzcgaDEgdjEgaC0xWiBNMzkgMzcgaDEgdjEgaC0xWiBNNDAgMzcgaDEgdjEgaC0xWiBNMCAzOCBoMSB2MSBoLTFaIE0xIDM4IGgxIHYxIGgtMVogTTIgMzggaDEgdjEgaC0xWiBNMyAzOCBoMSB2MSBoLTFaIE00IDM4IGgxIHYxIGgtMVogTTUgMzggaDEgdjEgaC0xWiBNNiAzOCBoMSB2MSBoLTFaIE03IDM4IGgxIHYxIGgtMVogTTggMzggaDEgdjEgaC0xWiBNOSAzOCBoMSB2MSBoLTFaIE0xMCAzOCBoMSB2MSBoLTFaIE0xMSAzOCBoMSB2MSBoLTFaIE0xMiAzOCBoMSB2MSBoLTFaIE0xMyAzOCBoMSB2MSBoLTFaIE0xNCAzOCBoMSB2MSBoLTFaIE0xNSAzOCBoMSB2MSBoLTFaIE0xNiAzOCBoMSB2MSBoLTFaIE0xNyAzOCBoMSB2MSBoLTFaIE0xOCAzOCBoMSB2MSBoLTFaIE0xOSAzOCBoMSB2MSBoLTFaIE0yMCAzOCBoMSB2MSBoLTFaIE0yMSAzOCBoMSB2MSBoLTFaIE0yMiAzOCBoMSB2MSBoLTFaIE0yMyAzOCBoMSB2MSBoLTFaIE0yNCAzOCBoMSB2MSBoLTFaIE0yNSAzOCBoMSB2MSBoLTFaIE0yNiAzOCBoMSB2MSBoLTFaIE0yNyAzOCBoMSB2MSBoLTFaIE0yOCAzOCBoMSB2MSBoLTFaIE0yOSAzOCBoMSB2MSBoLTFaIE0zMCAzOCBoMSB2MSBoLTFaCk0zMSAzOCBoMSB2MSBoLTFaIE0zMiAzOCBoMSB2MSBoLTFaIE0zMyAzOCBoMSB2MSBoLTFaIE0zNCAzOCBoMSB2MSBoLTFaIE0zNSAzOCBoMSB2MSBoLTFaIE0zNiAzOCBoMSB2MSBoLTFaIE0zNyAzOCBoMSB2MSBoLTFaIE0zOCAzOCBoMSB2MSBoLTFaIE0zOSAzOCBoMSB2MSBoLTFaIE00MCAzOCBoMSB2MSBoLTFaIE0wIDM5IGgxIHYxIGgtMVogTTEgMzkgaDEgdjEgaC0xWiBNMiAzOSBoMSB2MSBoLTFaIE0zIDM5IGgxIHYxIGgtMVogTTQgMzkgaDEgdjEgaC0xWiBNNSAzOSBoMSB2MSBoLTFaIE02IDM5IGgxIHYxIGgtMVogTTcgMzkgaDEgdjEgaC0xWiBNOCAzOSBoMSB2MSBoLTFaIE05IDM5IGgxIHYxIGgtMVogTTEwIDM5IGgxIHYxIGgtMVogTTExIDM5IGgxIHYxIGgtMVogTTEyIDM5IGgxIHYxIGgtMVogTTEzIDM5IGgxIHYxIGgtMVogTTE0IDM5IGgxIHYxIGgtMVogTTE1IDM5IGgxIHYxIGgtMVogTTE2IDM5IGgxIHYxIGgtMVogTTE3IDM5IGgxIHYxIGgtMVogTTE4IDM5IGgxIHYxIGgtMVogTTE5IDM5IGgxIHYxIGgtMVogTTIwIDM5IGgxIHYxIGgtMVogTTIxIDM5IGgxIHYxIGgtMVogTTIyIDM5IGgxIHYxIGgtMVogTTIzIDM5IGgxIHYxIGgtMVogTTI0IDM5IGgxIHYxIGgtMVogTTI1IDM5IGgxIHYxIGgtMVogTTI2IDM5IGgxIHYxIGgtMVogTTI3IDM5IGgxIHYxIGgtMVogTTI4IDM5IGgxIHYxIGgtMVogTTI5IDM5IGgxIHYxIGgtMVogTTMwIDM5IGgxIHYxIGgtMVogTTMxIDM5IGgxIHYxIGgtMVogTTMyIDM5IGgxIHYxIGgtMVogTTMzIDM5IGgxIHYxIGgtMVogTTM0IDM5IGgxIHYxIGgtMVogTTM1IDM5IGgxIHYxIGgtMVogTTM2IDM5IGgxIHYxIGgtMVogTTM3IDM5IGgxIHYxIGgtMVogTTM4IDM5IGgxIHYxIGgtMVogTTM5IDM5IGgxIHYxIGgtMVogTTQwIDM5IGgxIHYxIGgtMVogTTAgNDAgaDEgdjEgaC0xWiBNMSA0MCBoMSB2MSBoLTFaIE0yIDQwIGgxIHYxIGgtMVogTTMgNDAgaDEgdjEgaC0xWiBNNCA0MCBoMSB2MSBoLTFaIE01IDQwIGgxIHYxIGgtMVogTTYgNDAgaDEgdjEgaC0xWiBNNyA0MCBoMSB2MSBoLTFaIE04IDQwIGgxIHYxIGgtMVogTTkgNDAgaDEgdjEgaC0xWiBNMTAgNDAgaDEgdjEgaC0xWiBNMTEgNDAgaDEgdjEgaC0xWiBNMTIgNDAgaDEgdjEgaC0xWiBNMTMgNDAgaDEgdjEgaC0xWiBNMTQgNDAgaDEgdjEgaC0xWiBNMTUgNDAgaDEgdjEgaC0xWiBNMTYgNDAgaDEgdjEgaC0xWiBNMTcgNDAgaDEgdjEgaC0xWiBNMTggNDAgaDEgdjEgaC0xWiBNMTkgNDAgaDEgdjEgaC0xWiBNMjAgNDAgaDEgdjEgaC0xWiBNMjEgNDAgaDEgdjEgaC0xWiBNMjIgNDAgaDEgdjEgaC0xWiBNMjMgNDAgaDEgdjEgaC0xWiBNMjQgNDAgaDEgdjEgaC0xWiBNMjUgNDAgaDEgdjEgaC0xWiBNMjYgNDAgaDEgdjEgaC0xWiBNMjcgNDAgaDEgdjEgaC0xWiBNMjggNDAgaDEgdjEgaC0xWiBNMjkgNDAgaDEgdjEgaC0xWiBNMzAgNDAgaDEgdjEgaC0xWiBNMzEgNDAgaDEgdjEgaC0xWiBNMzIgNDAgaDEgdjEgaC0xWiBNMzMgNDAgaDEgdjEgaC0xWiBNMzQgNDAgaDEgdjEgaC0xWiBNMzUgNDAgaDEgdjEgaC0xWiBNMzYgNDAgaDEgdjEgaC0xWiBNMzcgNDAgaDEgdjEgaC0xWiBNMzggNDAgaDEgdjEgaC0xWiBNMzkgNDAgaDEgdjEgaC0xWiBNNDAgNDAgaDEgdjEgaC0xWiIvPgo8cGF0aCBjbGFzcz0icXItZGFya21vZHVsZSBkYXJrIHFyY29kZSIgZmlsbD0iIzAwMCIgZD0iTTEyIDI5IGgxIHYxIGgtMVoiLz4KPHBhdGggY2xhc3M9InFyLWRhdGEtZGFyayBkYXJrIHFyY29kZSIgZmlsbD0iIzAwMCIgZD0iTTE1IDQgaDEgdjEgaC0xWiBNMTYgNCBoMSB2MSBoLTFaIE0xNyA0IGgxIHYxIGgtMVogTTE4IDQgaDEgdjEgaC0xWiBNMjEgNCBoMSB2MSBoLTFaIE0yMiA0IGgxIHYxIGgtMVogTTI0IDQgaDEgdjEgaC0xWiBNMjUgNCBoMSB2MSBoLTFaIE0yNiA0IGgxIHYxIGgtMVogTTI3IDQgaDEgdjEgaC0xWiBNMTMgNSBoMSB2MSBoLTFaIE0xNCA1IGgxIHYxIGgtMVogTTE3IDUgaDEgdjEgaC0xWiBNMTggNSBoMSB2MSBoLTFaIE0yMSA1IGgxIHYxIGgtMVogTTIzIDUgaDEgdjEgaC0xWiBNMjUgNSBoMSB2MSBoLTFaIE0xNCA2IGgxIHYxIGgtMVogTTE2IDYgaDEgdjEgaC0xWiBNMTcgNiBoMSB2MSBoLTFaIE0xOCA2IGgxIHYxIGgtMVogTTE5IDYgaDEgdjEgaC0xWiBNMjIgNiBoMSB2MSBoLTFaIE0yMyA2IGgxIHYxIGgtMVogTTI0IDYgaDEgdjEgaC0xWiBNMjUgNiBoMSB2MSBoLTFaIE0yNiA2IGgxIHYxIGgtMVogTTE2IDcgaDEgdjEgaC0xWiBNMTcgNyBoMSB2MSBoLTFaIE0xOSA3IGgxIHYxIGgtMVogTTIwIDcgaDEgdjEgaC0xWiBNMjEgNyBoMSB2MSBoLTFaIE0yNSA3IGgxIHYxIGgtMVogTTI2IDcgaDEgdjEgaC0xWiBNMjcgNyBoMSB2MSBoLTFaIE0xMyA4IGgxIHYxIGgtMVogTTE1IDggaDEgdjEgaC0xWiBNMTcgOCBoMSB2MSBoLTFaIE0xOCA4IGgxIHYxIGgtMVogTTIwIDggaDEgdjEgaC0xWiBNMjIgOCBoMSB2MSBoLTFaIE0yMyA4IGgxIHYxIGgtMVogTTI0IDggaDEgdjEgaC0xWiBNMjUgOCBoMSB2MSBoLTFaIE0yNiA4IGgxIHYxIGgtMVogTTI4IDggaDEgdjEgaC0xWiBNMTQgOSBoMSB2MSBoLTFaIE0xNiA5IGgxIHYxIGgtMVogTTE3IDkgaDEgdjEgaC0xWiBNMTggOSBoMSB2MSBoLTFaIE0yMCA5IGgxIHYxIGgtMVogTTIxIDkgaDEgdjEgaC0xWiBNMjIgOSBoMSB2MSBoLTFaIE0yNSA5IGgxIHYxIGgtMVogTTI2IDkgaDEgdjEgaC0xWiBNMjcgOSBoMSB2MSBoLTFaIE0yOCA5IGgxIHYxIGgtMVogTTE0IDExIGgxIHYxIGgtMVogTTE1IDExIGgxIHYxIGgtMVogTTE3IDExIGgxIHYxIGgtMVogTTE4IDExIGgxIHYxIGgtMVogTTE5IDExIGgxIHYxIGgtMVogTTI0IDExIGgxIHYxIGgtMVogTTI2IDExIGgxIHYxIGgtMVogTTEzIDEyIGgxIHYxIGgtMVogTTE0IDEyIGgxIHYxIGgtMVogTTE1IDEyIGgxIHYxIGgtMVogTTE5IDEyIGgxIHYxIGgtMVogTTIxIDEyIGgxIHYxIGgtMVogTTI0IDEyIGgxIHYxIGgtMVogTTI1IDEyIGgxIHYxIGgtMVogTTQgMTMgaDEgdjEgaC0xWiBNNiAxMyBoMSB2MSBoLTFaIE03IDEzIGgxIHYxIGgtMVogTTExIDEzIGgxIHYxIGgtMVogTTEzIDEzIGgxIHYxIGgtMVogTTE2IDEzIGgxIHYxIGgtMVogTTE3IDEzIGgxIHYxIGgtMVogTTE4IDEzIGgxIHYxIGgtMVogTTE5IDEzIGgxIHYxIGgtMVogTTI1IDEzIGgxIHYxIGgtMVogTTI2IDEzIGgxIHYxIGgtMVogTTI3IDEzIGgxIHYxIGgtMVogTTI5IDEzIGgxIHYxIGgtMVogTTMxIDEzIGgxIHYxIGgtMVogTTMyIDEzIGgxIHYxIGgtMVogTTMzIDEzIGgxIHYxIGgtMVogTTM0IDEzIGgxIHYxIGgtMVogTTM1IDEzIGgxIHYxIGgtMVogTTQgMTQgaDEgdjEgaC0xWiBNNSAxNCBoMSB2MSBoLTFaIE04IDE0IGgxIHYxIGgtMVogTTE0IDE0IGgxIHYxIGgtMVogTTE1IDE0IGgxIHYxIGgtMVogTTE3IDE0IGgxIHYxIGgtMVogTTE5IDE0IGgxIHYxIGgtMVogTTIwIDE0IGgxIHYxIGgtMVogTTIyIDE0IGgxIHYxIGgtMVogTTI0IDE0IGgxIHYxIGgtMVogTTI3IDE0IGgxIHYxIGgtMVoKTTI5IDE0IGgxIHYxIGgtMVogTTMwIDE0IGgxIHYxIGgtMVogTTMyIDE0IGgxIHYxIGgtMVogTTM0IDE0IGgxIHYxIGgtMVogTTM1IDE0IGgxIHYxIGgtMVogTTM2IDE0IGgxIHYxIGgtMVogTTQgMTUgaDEgdjEgaC0xWiBNNSAxNSBoMSB2MSBoLTFaIE0xMSAxNSBoMSB2MSBoLTFaIE0xMyAxNSBoMSB2MSBoLTFaIE0xNCAxNSBoMSB2MSBoLTFaIE0xNSAxNSBoMSB2MSBoLTFaIE0xNiAxNSBoMSB2MSBoLTFaIE0yMSAxNSBoMSB2MSBoLTFaIE0yMyAxNSBoMSB2MSBoLTFaIE0yNCAxNSBoMSB2MSBoLTFaIE0yNiAxNSBoMSB2MSBoLTFaIE0yNyAxNSBoMSB2MSBoLTFaIE0zMSAxNSBoMSB2MSBoLTFaIE0zNCAxNSBoMSB2MSBoLTFaIE0zNSAxNSBoMSB2MSBoLTFaIE00IDE2IGgxIHYxIGgtMVogTTUgMTYgaDEgdjEgaC0xWiBNNiAxNiBoMSB2MSBoLTFaIE04IDE2IGgxIHYxIGgtMVogTTkgMTYgaDEgdjEgaC0xWiBNMTEgMTYgaDEgdjEgaC0xWiBNMTIgMTYgaDEgdjEgaC0xWiBNMTMgMTYgaDEgdjEgaC0xWiBNMTUgMTYgaDEgdjEgaC0xWiBNMTYgMTYgaDEgdjEgaC0xWiBNMTkgMTYgaDEgdjEgaC0xWiBNMjAgMTYgaDEgdjEgaC0xWiBNMjQgMTYgaDEgdjEgaC0xWiBNMjUgMTYgaDEgdjEgaC0xWiBNMjcgMTYgaDEgdjEgaC0xWiBNMjggMTYgaDEgdjEgaC0xWiBNMzAgMTYgaDEgdjEgaC0xWiBNMzEgMTYgaDEgdjEgaC0xWiBNMzUgMTYgaDEgdjEgaC0xWiBNMzYgMTYgaDEgdjEgaC0xWiBNNSAxNyBoMSB2MSBoLTFaIE02IDE3IGgxIHYxIGgtMVogTTcgMTcgaDEgdjEgaC0xWiBNOCAxNyBoMSB2MSBoLTFaIE05IDE3IGgxIHYxIGgtMVogTTExIDE3IGgxIHYxIGgtMVogTTEyIDE3IGgxIHYxIGgtMVogTTEzIDE3IGgxIHYxIGgtMVogTTE4IDE3IGgxIHYxIGgtMVogTTE5IDE3IGgxIHYxIGgtMVogTTIwIDE3IGgxIHYxIGgtMVogTTIzIDE3IGgxIHYxIGgtMVogTTI1IDE3IGgxIHYxIGgtMVogTTI2IDE3IGgxIHYxIGgtMVogTTI3IDE3IGgxIHYxIGgtMVogTTI5IDE3IGgxIHYxIGgtMVogTTMzIDE3IGgxIHYxIGgtMVogTTM0IDE3IGgxIHYxIGgtMVogTTM1IDE3IGgxIHYxIGgtMVogTTUgMTggaDEgdjEgaC0xWiBNNyAxOCBoMSB2MSBoLTFaIE04IDE4IGgxIHYxIGgtMVogTTkgMTggaDEgdjEgaC0xWiBNMTIgMTggaDEgdjEgaC0xWiBNMTMgMTggaDEgdjEgaC0xWiBNMTUgMTggaDEgdjEgaC0xWiBNMTYgMTggaDEgdjEgaC0xWiBNMTggMTggaDEgdjEgaC0xWiBNMTkgMTggaDEgdjEgaC0xWiBNMjAgMTggaDEgdjEgaC0xWiBNMjEgMTggaDEgdjEgaC0xWiBNMjIgMTggaDEgdjEgaC0xWiBNMjMgMTggaDEgdjEgaC0xWiBNMjUgMTggaDEgdjEgaC0xWiBNMjYgMTggaDEgdjEgaC0xWiBNMjggMTggaDEgdjEgaC0xWiBNMzEgMTggaDEgdjEgaC0xWiBNMzIgMTggaDEgdjEgaC0xWiBNMzQgMTggaDEgdjEgaC0xWiBNNCAxOSBoMSB2MSBoLTFaIE01IDE5IGgxIHYxIGgtMVogTTYgMTkgaDEgdjEgaC0xWiBNNyAxOSBoMSB2MSBoLTFaIE05IDE5IGgxIHYxIGgtMVogTTExIDE5IGgxIHYxIGgtMVogTTE1IDE5IGgxIHYxIGgtMVogTTE4IDE5IGgxIHYxIGgtMVogTTI0IDE5IGgxIHYxIGgtMVogTTI2IDE5IGgxIHYxIGgtMVogTTI3IDE5IGgxIHYxIGgtMVogTTI4IDE5IGgxIHYxIGgtMVogTTI5IDE5IGgxIHYxIGgtMVogTTMwIDE5IGgxIHYxIGgtMVogTTMyIDE5IGgxIHYxIGgtMVogTTMzIDE5IGgxIHYxIGgtMVogTTM0IDE5IGgxIHYxIGgtMVogTTM2IDE5IGgxIHYxIGgtMVogTTQgMjAgaDEgdjEgaC0xWiBNMTEgMjAgaDEgdjEgaC0xWgpNMTcgMjAgaDEgdjEgaC0xWiBNMjMgMjAgaDEgdjEgaC0xWiBNMjcgMjAgaDEgdjEgaC0xWiBNMjkgMjAgaDEgdjEgaC0xWiBNMzAgMjAgaDEgdjEgaC0xWiBNMzIgMjAgaDEgdjEgaC0xWiBNMzMgMjAgaDEgdjEgaC0xWiBNMzYgMjAgaDEgdjEgaC0xWiBNNyAyMSBoMSB2MSBoLTFaIE0xNSAyMSBoMSB2MSBoLTFaIE0xNiAyMSBoMSB2MSBoLTFaIE0xOSAyMSBoMSB2MSBoLTFaIE0yMSAyMSBoMSB2MSBoLTFaIE0yNCAyMSBoMSB2MSBoLTFaIE0yOSAyMSBoMSB2MSBoLTFaIE0zMCAyMSBoMSB2MSBoLTFaIE0zMSAyMSBoMSB2MSBoLTFaIE0zMiAyMSBoMSB2MSBoLTFaIE0zMyAyMSBoMSB2MSBoLTFaIE0zNSAyMSBoMSB2MSBoLTFaIE0zNiAyMSBoMSB2MSBoLTFaIE00IDIyIGgxIHYxIGgtMVogTTUgMjIgaDEgdjEgaC0xWiBNOCAyMiBoMSB2MSBoLTFaIE05IDIyIGgxIHYxIGgtMVogTTEyIDIyIGgxIHYxIGgtMVogTTEzIDIyIGgxIHYxIGgtMVogTTE0IDIyIGgxIHYxIGgtMVogTTE1IDIyIGgxIHYxIGgtMVogTTE3IDIyIGgxIHYxIGgtMVogTTE5IDIyIGgxIHYxIGgtMVogTTIwIDIyIGgxIHYxIGgtMVogTTIxIDIyIGgxIHYxIGgtMVogTTIzIDIyIGgxIHYxIGgtMVogTTI0IDIyIGgxIHYxIGgtMVogTTI1IDIyIGgxIHYxIGgtMVogTTI3IDIyIGgxIHYxIGgtMVogTTI5IDIyIGgxIHYxIGgtMVogTTMwIDIyIGgxIHYxIGgtMVogTTMxIDIyIGgxIHYxIGgtMVogTTMyIDIyIGgxIHYxIGgtMVogTTMzIDIyIGgxIHYxIGgtMVogTTM0IDIyIGgxIHYxIGgtMVogTTM2IDIyIGgxIHYxIGgtMVogTTQgMjMgaDEgdjEgaC0xWiBNNiAyMyBoMSB2MSBoLTFaIE04IDIzIGgxIHYxIGgtMVogTTEyIDIzIGgxIHYxIGgtMVogTTEzIDIzIGgxIHYxIGgtMVogTTE2IDIzIGgxIHYxIGgtMVogTTE3IDIzIGgxIHYxIGgtMVogTTIwIDIzIGgxIHYxIGgtMVogTTI3IDIzIGgxIHYxIGgtMVogTTI4IDIzIGgxIHYxIGgtMVogTTMxIDIzIGgxIHYxIGgtMVogTTM0IDIzIGgxIHYxIGgtMVogTTM1IDIzIGgxIHYxIGgtMVogTTM2IDIzIGgxIHYxIGgtMVogTTQgMjQgaDEgdjEgaC0xWiBNMTEgMjQgaDEgdjEgaC0xWiBNMTIgMjQgaDEgdjEgaC0xWiBNMTMgMjQgaDEgdjEgaC0xWiBNMTQgMjQgaDEgdjEgaC0xWiBNMTYgMjQgaDEgdjEgaC0xWiBNMTggMjQgaDEgdjEgaC0xWiBNMjAgMjQgaDEgdjEgaC0xWiBNMjEgMjQgaDEgdjEgaC0xWiBNMjUgMjQgaDEgdjEgaC0xWiBNMjggMjQgaDEgdjEgaC0xWiBNMzMgMjQgaDEgdjEgaC0xWiBNNCAyNSBoMSB2MSBoLTFaIE01IDI1IGgxIHYxIGgtMVogTTcgMjUgaDEgdjEgaC0xWiBNOCAyNSBoMSB2MSBoLTFaIE0xMiAyNSBoMSB2MSBoLTFaIE0xNCAyNSBoMSB2MSBoLTFaIE0xOSAyNSBoMSB2MSBoLTFaIE0yMiAyNSBoMSB2MSBoLTFaIE0yNyAyNSBoMSB2MSBoLTFaIE0yOSAyNSBoMSB2MSBoLTFaIE0zMSAyNSBoMSB2MSBoLTFaIE0zMiAyNSBoMSB2MSBoLTFaIE0zNSAyNSBoMSB2MSBoLTFaIE00IDI2IGgxIHYxIGgtMVogTTYgMjYgaDEgdjEgaC0xWiBNOCAyNiBoMSB2MSBoLTFaIE0xMSAyNiBoMSB2MSBoLTFaIE0xMiAyNiBoMSB2MSBoLTFaIE0xMyAyNiBoMSB2MSBoLTFaIE0xNCAyNiBoMSB2MSBoLTFaIE0xNiAyNiBoMSB2MSBoLTFaIE0xOSAyNiBoMSB2MSBoLTFaIE0yMCAyNiBoMSB2MSBoLTFaIE0yMSAyNiBoMSB2MSBoLTFaIE0yNCAyNiBoMSB2MSBoLTFaIE0yNiAyNiBoMSB2MSBoLTFaIE0yNyAyNiBoMSB2MSBoLTFaIE0yOSAyNiBoMSB2MSBoLTFaIE0zMCAyNiBoMSB2MSBoLTFaIE0zMiAyNiBoMSB2MSBoLTFaCk0zMyAyNiBoMSB2MSBoLTFaIE0zNSAyNiBoMSB2MSBoLTFaIE0zNiAyNiBoMSB2MSBoLTFaIE00IDI3IGgxIHYxIGgtMVogTTcgMjcgaDEgdjEgaC0xWiBNOCAyNyBoMSB2MSBoLTFaIE05IDI3IGgxIHYxIGgtMVogTTEzIDI3IGgxIHYxIGgtMVogTTE0IDI3IGgxIHYxIGgtMVogTTIwIDI3IGgxIHYxIGgtMVogTTIxIDI3IGgxIHYxIGgtMVogTTIzIDI3IGgxIHYxIGgtMVogTTI0IDI3IGgxIHYxIGgtMVogTTI2IDI3IGgxIHYxIGgtMVogTTI3IDI3IGgxIHYxIGgtMVogTTMxIDI3IGgxIHYxIGgtMVogTTMzIDI3IGgxIHYxIGgtMVogTTM0IDI3IGgxIHYxIGgtMVogTTM1IDI3IGgxIHYxIGgtMVogTTM2IDI3IGgxIHYxIGgtMVogTTQgMjggaDEgdjEgaC0xWiBNNSAyOCBoMSB2MSBoLTFaIE03IDI4IGgxIHYxIGgtMVogTTEyIDI4IGgxIHYxIGgtMVogTTE3IDI4IGgxIHYxIGgtMVogTTE4IDI4IGgxIHYxIGgtMVogTTIwIDI4IGgxIHYxIGgtMVogTTIzIDI4IGgxIHYxIGgtMVogTTI1IDI4IGgxIHYxIGgtMVogTTI3IDI4IGgxIHYxIGgtMVogTTMzIDI4IGgxIHYxIGgtMVogTTEzIDI5IGgxIHYxIGgtMVogTTE2IDI5IGgxIHYxIGgtMVogTTE4IDI5IGgxIHYxIGgtMVogTTE5IDI5IGgxIHYxIGgtMVogTTIwIDI5IGgxIHYxIGgtMVogTTIzIDI5IGgxIHYxIGgtMVogTTMzIDI5IGgxIHYxIGgtMVogTTM1IDI5IGgxIHYxIGgtMVogTTE0IDMwIGgxIHYxIGgtMVogTTE4IDMwIGgxIHYxIGgtMVogTTE5IDMwIGgxIHYxIGgtMVogTTIwIDMwIGgxIHYxIGgtMVogTTIxIDMwIGgxIHYxIGgtMVogTTIyIDMwIGgxIHYxIGgtMVogTTIzIDMwIGgxIHYxIGgtMVogTTI2IDMwIGgxIHYxIGgtMVogTTI3IDMwIGgxIHYxIGgtMVogTTMzIDMwIGgxIHYxIGgtMVogTTE2IDMxIGgxIHYxIGgtMVogTTE3IDMxIGgxIHYxIGgtMVogTTE4IDMxIGgxIHYxIGgtMVogTTIwIDMxIGgxIHYxIGgtMVogTTIyIDMxIGgxIHYxIGgtMVogTTI3IDMxIGgxIHYxIGgtMVogTTM0IDMxIGgxIHYxIGgtMVogTTM1IDMxIGgxIHYxIGgtMVogTTM2IDMxIGgxIHYxIGgtMVogTTEzIDMyIGgxIHYxIGgtMVogTTE1IDMyIGgxIHYxIGgtMVogTTE2IDMyIGgxIHYxIGgtMVogTTIyIDMyIGgxIHYxIGgtMVogTTI0IDMyIGgxIHYxIGgtMVogTTI1IDMyIGgxIHYxIGgtMVogTTI2IDMyIGgxIHYxIGgtMVogTTI3IDMyIGgxIHYxIGgtMVogTTMzIDMyIGgxIHYxIGgtMVogTTM2IDMyIGgxIHYxIGgtMVogTTE1IDMzIGgxIHYxIGgtMVogTTE5IDMzIGgxIHYxIGgtMVogTTI0IDMzIGgxIHYxIGgtMVogTTE0IDM0IGgxIHYxIGgtMVogTTE2IDM0IGgxIHYxIGgtMVogTTE3IDM0IGgxIHYxIGgtMVogTTE4IDM0IGgxIHYxIGgtMVogTTE5IDM0IGgxIHYxIGgtMVogTTIxIDM0IGgxIHYxIGgtMVogTTIzIDM0IGgxIHYxIGgtMVogTTI0IDM0IGgxIHYxIGgtMVogTTI3IDM0IGgxIHYxIGgtMVogTTI4IDM0IGgxIHYxIGgtMVogTTMyIDM0IGgxIHYxIGgtMVogTTM2IDM0IGgxIHYxIGgtMVogTTEzIDM1IGgxIHYxIGgtMVogTTE1IDM1IGgxIHYxIGgtMVogTTE3IDM1IGgxIHYxIGgtMVogTTE5IDM1IGgxIHYxIGgtMVogTTI0IDM1IGgxIHYxIGgtMVogTTI3IDM1IGgxIHYxIGgtMVogTTMzIDM1IGgxIHYxIGgtMVogTTM0IDM1IGgxIHYxIGgtMVogTTM1IDM1IGgxIHYxIGgtMVogTTM2IDM1IGgxIHYxIGgtMVogTTEzIDM2IGgxIHYxIGgtMVogTTE0IDM2IGgxIHYxIGgtMVogTTE1IDM2IGgxIHYxIGgtMVogTTE3IDM2IGgxIHYxIGgtMVogTTE5IDM2IGgxIHYxIGgtMVogTTIwIDM2IGgxIHYxIGgtMVogTTIxIDM2IGgxIHYxIGgtMVoKTTI1IDM2IGgxIHYxIGgtMVogTTI3IDM2IGgxIHYxIGgtMVogTTI4IDM2IGgxIHYxIGgtMVogTTMwIDM2IGgxIHYxIGgtMVogTTMyIDM2IGgxIHYxIGgtMVogTTMzIDM2IGgxIHYxIGgtMVoiLz4KPHBhdGggY2xhc3M9InFyLWZpbmRlci1kYXJrIGRhcmsgcXJjb2RlIiBmaWxsPSIjMDAwIiBkPSJNNCA0IGgxIHYxIGgtMVogTTUgNCBoMSB2MSBoLTFaIE02IDQgaDEgdjEgaC0xWiBNNyA0IGgxIHYxIGgtMVogTTggNCBoMSB2MSBoLTFaIE05IDQgaDEgdjEgaC0xWiBNMTAgNCBoMSB2MSBoLTFaIE0zMCA0IGgxIHYxIGgtMVogTTMxIDQgaDEgdjEgaC0xWiBNMzIgNCBoMSB2MSBoLTFaIE0zMyA0IGgxIHYxIGgtMVogTTM0IDQgaDEgdjEgaC0xWiBNMzUgNCBoMSB2MSBoLTFaIE0zNiA0IGgxIHYxIGgtMVogTTQgNSBoMSB2MSBoLTFaIE0xMCA1IGgxIHYxIGgtMVogTTMwIDUgaDEgdjEgaC0xWiBNMzYgNSBoMSB2MSBoLTFaIE00IDYgaDEgdjEgaC0xWiBNMTAgNiBoMSB2MSBoLTFaIE0zMCA2IGgxIHYxIGgtMVogTTM2IDYgaDEgdjEgaC0xWiBNNCA3IGgxIHYxIGgtMVogTTEwIDcgaDEgdjEgaC0xWiBNMzAgNyBoMSB2MSBoLTFaIE0zNiA3IGgxIHYxIGgtMVogTTQgOCBoMSB2MSBoLTFaIE0xMCA4IGgxIHYxIGgtMVogTTMwIDggaDEgdjEgaC0xWiBNMzYgOCBoMSB2MSBoLTFaIE00IDkgaDEgdjEgaC0xWiBNMTAgOSBoMSB2MSBoLTFaIE0zMCA5IGgxIHYxIGgtMVogTTM2IDkgaDEgdjEgaC0xWiBNNCAxMCBoMSB2MSBoLTFaIE01IDEwIGgxIHYxIGgtMVogTTYgMTAgaDEgdjEgaC0xWiBNNyAxMCBoMSB2MSBoLTFaIE04IDEwIGgxIHYxIGgtMVogTTkgMTAgaDEgdjEgaC0xWiBNMTAgMTAgaDEgdjEgaC0xWiBNMzAgMTAgaDEgdjEgaC0xWiBNMzEgMTAgaDEgdjEgaC0xWiBNMzIgMTAgaDEgdjEgaC0xWiBNMzMgMTAgaDEgdjEgaC0xWiBNMzQgMTAgaDEgdjEgaC0xWiBNMzUgMTAgaDEgdjEgaC0xWiBNMzYgMTAgaDEgdjEgaC0xWiBNNCAzMCBoMSB2MSBoLTFaIE01IDMwIGgxIHYxIGgtMVogTTYgMzAgaDEgdjEgaC0xWiBNNyAzMCBoMSB2MSBoLTFaIE04IDMwIGgxIHYxIGgtMVogTTkgMzAgaDEgdjEgaC0xWiBNMTAgMzAgaDEgdjEgaC0xWiBNNCAzMSBoMSB2MSBoLTFaIE0xMCAzMSBoMSB2MSBoLTFaIE00IDMyIGgxIHYxIGgtMVogTTEwIDMyIGgxIHYxIGgtMVogTTQgMzMgaDEgdjEgaC0xWiBNMTAgMzMgaDEgdjEgaC0xWiBNNCAzNCBoMSB2MSBoLTFaIE0xMCAzNCBoMSB2MSBoLTFaIE00IDM1IGgxIHYxIGgtMVogTTEwIDM1IGgxIHYxIGgtMVogTTQgMzYgaDEgdjEgaC0xWiBNNSAzNiBoMSB2MSBoLTFaIE02IDM2IGgxIHYxIGgtMVogTTcgMzYgaDEgdjEgaC0xWiBNOCAzNiBoMSB2MSBoLTFaIE05IDM2IGgxIHYxIGgtMVogTTEwIDM2IGgxIHYxIGgtMVoiLz4KPHBhdGggY2xhc3M9InFyLWFsaWdubWVudC1kYXJrIGRhcmsgcXJjb2RlIiBmaWxsPSIjMDAwIiBkPSJNMjggMjggaDEgdjEgaC0xWiBNMjkgMjggaDEgdjEgaC0xWiBNMzAgMjggaDEgdjEgaC0xWiBNMzEgMjggaDEgdjEgaC0xWiBNMzIgMjggaDEgdjEgaC0xWiBNMjggMjkgaDEgdjEgaC0xWiBNMzIgMjkgaDEgdjEgaC0xWiBNMjggMzAgaDEgdjEgaC0xWiBNMzAgMzAgaDEgdjEgaC0xWiBNMzIgMzAgaDEgdjEgaC0xWiBNMjggMzEgaDEgdjEgaC0xWiBNMzIgMzEgaDEgdjEgaC0xWiBNMjggMzIgaDEgdjEgaC0xWiBNMjkgMzIgaDEgdjEgaC0xWiBNMzAgMzIgaDEgdjEgaC0xWiBNMzEgMzIgaDEgdjEgaC0xWiBNMzIgMzIgaDEgdjEgaC0xWiIvPgo8cGF0aCBjbGFzcz0icXItdGltaW5nLWRhcmsgZGFyayBxcmNvZGUiIGZpbGw9IiMwMDAiIGQ9Ik0xMiAxMCBoMSB2MSBoLTFaIE0xNCAxMCBoMSB2MSBoLTFaIE0xNiAxMCBoMSB2MSBoLTFaIE0xOCAxMCBoMSB2MSBoLTFaIE0yMCAxMCBoMSB2MSBoLTFaIE0yMiAxMCBoMSB2MSBoLTFaIE0yNCAxMCBoMSB2MSBoLTFaIE0yNiAxMCBoMSB2MSBoLTFaIE0yOCAxMCBoMSB2MSBoLTFaIE0xMCAxMiBoMSB2MSBoLTFaIE0xMCAxNCBoMSB2MSBoLTFaIE0xMCAxNiBoMSB2MSBoLTFaIE0xMCAxOCBoMSB2MSBoLTFaIE0xMCAyMCBoMSB2MSBoLTFaIE0xMCAyMiBoMSB2MSBoLTFaIE0xMCAyNCBoMSB2MSBoLTFaIE0xMCAyNiBoMSB2MSBoLTFaIE0xMCAyOCBoMSB2MSBoLTFaIi8+CjxwYXRoIGNsYXNzPSJxci1mb3JtYXQtZGFyayBkYXJrIHFyY29kZSIgZmlsbD0iIzAwMCIgZD0iTTEyIDQgaDEgdjEgaC0xWiBNMTIgMTEgaDEgdjEgaC0xWiBNNCAxMiBoMSB2MSBoLTFaIE01IDEyIGgxIHYxIGgtMVogTTcgMTIgaDEgdjEgaC0xWiBNOCAxMiBoMSB2MSBoLTFaIE0zMCAxMiBoMSB2MSBoLTFaIE0zNiAxMiBoMSB2MSBoLTFaIE0xMiAzMiBoMSB2MSBoLTFaIE0xMiAzMyBoMSB2MSBoLTFaIE0xMiAzNSBoMSB2MSBoLTFaIE0xMiAzNiBoMSB2MSBoLTFaIi8+CjxwYXRoIGNsYXNzPSJxci1maW5kZXItZG90IGRhcmsgcXJjb2RlIiBmaWxsPSIjMDAwIiBkPSJNNiA2IGgxIHYxIGgtMVogTTcgNiBoMSB2MSBoLTFaIE04IDYgaDEgdjEgaC0xWiBNMzIgNiBoMSB2MSBoLTFaIE0zMyA2IGgxIHYxIGgtMVogTTM0IDYgaDEgdjEgaC0xWiBNNiA3IGgxIHYxIGgtMVogTTcgNyBoMSB2MSBoLTFaIE04IDcgaDEgdjEgaC0xWiBNMzIgNyBoMSB2MSBoLTFaIE0zMyA3IGgxIHYxIGgtMVogTTM0IDcgaDEgdjEgaC0xWiBNNiA4IGgxIHYxIGgtMVogTTcgOCBoMSB2MSBoLTFaIE04IDggaDEgdjEgaC0xWiBNMzIgOCBoMSB2MSBoLTFaIE0zMyA4IGgxIHYxIGgtMVogTTM0IDggaDEgdjEgaC0xWiBNNiAzMiBoMSB2MSBoLTFaIE03IDMyIGgxIHYxIGgtMVogTTggMzIgaDEgdjEgaC0xWiBNNiAzMyBoMSB2MSBoLTFaIE03IDMzIGgxIHYxIGgtMVogTTggMzMgaDEgdjEgaC0xWiBNNiAzNCBoMSB2MSBoLTFaIE03IDM0IGgxIHYxIGgtMVogTTggMzQgaDEgdjEgaC0xWiIvPgo8L3N2Zz4K"
                            alt="QR Code" />
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="notopborder bottomborder"
                        style="padding: 0px 20px 10px 0px; text-align: right">
                        <div class="titulo">Recibo do pagador</div>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="linha-pontilhada">Corte na linha pontilhada</div>
        <br>

        <!-- Ficha de compensação -->
        <!--
 * OpenBoleto - Geração de boletos bancários em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

        <table class="table-boleto" cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                    <td valign="bottom" colspan="8" class="noborder nopadding">
                        <div class="logocontainer">
                            <div class="logobanco">
                                <img src="data:image/jpg;base64,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"
                                    alt="logotipo do banco">
                            </div>
                            <div class="codbanco">
                                001-9 </div>
                        </div>
                        <div class="linha-digitavel">
                            00191.23413 23456.717240 10403.005183 3 55880000002300 </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="7">
                        <div class="titulo">Local de pagamento</div>
                        <div class="conteudo">
                            Pagável em qualquer banco </div>
                    </td>
                    <td width="180">
                        <div class="titulo">Vencimento</div>
                        <div class="conteudo rtl">
                            24/01/2013 </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" rowspan="2" valign="top">
                        <div class="titulo">Beneficiário</div>
                        <div class="conteudo float_left">
                            Empresa de cosméticos LTDA<br />
                            CLS 403 Lj 23<br />
                            71000-000 - Brasília - DF </div>
                        <div class="conteudo cpf_cnpj">
                            02.123.123/0001-11 </div>


                    </td>
                    <td>
                        <div class="titulo">Agência/Código beneficiário</div>
                        <div class="conteudo rtl">
                            1724 / 10403005 </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="titulo">Nosso número</div>
                        <div class="conteudo rtl">
                            12341234567-1 </div>
                    </td>
                </tr>
                <tr>
                    <td width="110" colspan="2">
                        <div class="titulo">Data do documento</div>
                        <div class="conteudo">
                            12/11/2024 </div>
                    </td>
                    <td width="120" colspan="2">
                        <div class="titulo">Nº documento</div>
                        <div class="conteudo">
                        </div>
                    </td>
                    <td width="60">
                        <div class="titulo">Espécie doc.</div>
                        <div class="conteudo">
                        </div>
                    </td>
                    <td>
                        <div class="titulo">Aceite</div>
                        <div class="conteudo">
                            N </div>
                    </td>
                    <td width="110">
                        <div class="titulo">Data processamento</div>
                        <div class="conteudo">
                            12/11/2024 </div>
                    </td>
                    <td>
                        <div class="titulo">(=) Valor do Documento</div>
                        <div class="conteudo rtl">
                            23,00 </div>
                    </td>
                </tr>
                <tr>


                    <td>
                        <div class="titulo">Carteira</div>
                        <div class="conteudo">
                            18 </div>
                    </td>
                    <td width="35">
                        <div class="titulo">Espécie</div>
                        <div class="conteudo">
                            REAL </div>
                    </td>
                    <td colspan="2">
                        <div class="titulo">Quantidade</div>
                        <div class="conteudo">
                        </div>
                    </td>
                    <td width="110">
                        <div class="titulo">Valor</div>
                        <div class="conteudo">
                        </div>
                    </td>
                    <td>
                        <div class="titulo">(-) Descontos / Abatimentos</div>
                        <div class="conteudo rtl">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" valign="top">
                        <div class="titulo">Instruções (Texto de responsabilidade do beneficiário)</div>
                    </td>
                    <td>
                        <div class="titulo">(-) Outras deduções</div>
                        <div class="conteudo rtl">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" class="notopborder" valign="top">
                        <div class="conteudo">
                            Pagar até a data do vencimento. </div>
                        <div class="conteudo">
                        </div>
                    </td>
                    <td>
                        <div class="titulo">(+) Mora / Multa</div>
                        <div class="conteudo rtl">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" class="notopborder">
                        <div class="conteudo">
                        </div>
                        <div class="conteudo">
                        </div>
                    </td>
                    <td>
                        <div class="titulo">(+) Outros acréscimos</div>
                        <div class="conteudo rtl">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" class="notopborder">
                        <div class="conteudo">
                        </div>
                        <div class="conteudo">
                        </div>
                    </td>
                    <td>
                        <div class="titulo">(=) Valor cobrado</div>
                        <div class="conteudo rtl">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" valign="top">
                        <div class="titulo">Pagador</div>
                        <div class="conteudo float_left">
                            Fernando Maia<br />
                            ABC 302 Bloco N<br />
                            72000-000 - Brasília - DF </div>
                        <div class="conteudo cpf_cnpj">
                            023.434.234-34 </div>
                    </td>
                    <td class="noleftborder">
                        <div class="titulo" style="margin-top: 50px">Cód. Baixa</div>
                    </td>
                </tr>

                <tr>
                    <td colspan="6" class="noleftborder">
                        <div class="titulo">Pagador / Avalista <div class="conteudo pagador">
                            </div>
                        </div>
                    </td>
                    <td colspan="2" class="norightborder noleftborder">
                        <div class="conteudo noborder rtl">Autenticação mecânica - Ficha de Compensação</div>
                    </td>
                </tr>

                <tr>
                    <td colspan="8" class="noborder">
                        <div class="barcode">
                            <div class="black thin"></div>
                            <div class="white thin"></div>
                            <div class="black thin"></div>
                            <div class="white thin"></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black large'></div>
                            <div class='white large'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white thin'></div>
                            <div class='black thin'></div>
                            <div class='white large'></div>
                            <div class='black large'></div>
                            <div class='white thin'></div>
                            <div class="black large"></div>
                            <div class="white thin"></div>
                            <div class="black thin"></div>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>
