// var a = 20
// var b = 10
// var c = null

// console.log(b,a)

// c = a
// a = b
// b = c


// console.log(b,a)


// if (1 == 0)
//     {
//         console.log('que coisa linda ')
//     }
//     else{
//         console.log('que coisa feia kk k')
//     }

//     if( 1 == 1)
//     {document.write('ola tudo bem?')}
//         else if (1 == 0){
//             document.write = 'piroca'
//         }
//         else{
//             document.write = '1'
//         }


// var nota = prompt('Digite a sua nota')
// var media = 7
// if (nota < media){
//     document.write('Infelizmente você não passou')
// }
//     else{
//         document.write('Parabéns você passou')
//     }

// Transformação do tipo  de variavel parse'
// var v1 = prompt('Digite um número')
// var v2 = prompt('Digite outro número')


// document.write(v1.toString()   + v2.toString())

// var com = true
// var pipe = true
// var i= true

// if (com == true && pipe == true && i == true){
//     document.write('ok correto comercial <br>')
// }

// if (com == false || pipe == true || i == false){
//     document.write('Ok correto pipe <br>')
//     }

// if (com ==! false){
//     document.write('Ok correto i <br>')
// }


// case exemplo
// var resp = prompt('Digite um número')
// resp = parseInt(resp)

// switch(resp){
//     case 1:
//         document.write('Você digitou 1')
//     break
//     case 2:
//         document.write('Você digitou 2')
//         break
//     default:
//         document.write('Você digito nem 1 e nem 2')
//         break
// }

// Exemplos aritimeticos
// document.write('<br>' + 1/3)


// var n1 = 5
// var n2 = 81

// document.write('a soma de a  e b é igual a ' + (n1 + n2))

// function

// function imprimirtudo (nome, idade){
//      document.write('o seu nome é ' + nome +'e a sua idade é ' + idade)
// }
// imprimirtudo('gustavo', '1')

// var l = prompt ('Qual a lagura do terreno?')
// var c = prompt ('Qual o comprimento do terreno?')

// document.write('O tamanho do terreno é ' + areacalc(l, c) + '²')

// document.write(area) ERRRADO

// function areacalc(largura, comprimento){
//     var area = largura * comprimento
//     area = parseFloat(area)
//     return area
// }

// function soma(a, b){
// return a + b
// }

// Escopos de função... global, função e bloco
// global : funciona no script inteiro
var mundo = 'Tudo'
document.write(mundo + '<br>')
// função : funciona apenas dentro da função
function x(){
    var funcao = 'variavel de função'
}
// document.write(funcao)

// bloco : funciona apenas dentro de comandos (if, else...)
var serie = 'Friends'
if (true) {
    document.write(serie)
}

//função anonima
var nome = prompt('Qual meu nome?')
var invfunc = function()
{   
    document.write('<br>Olá humanos, sou o ' + nome)
}
//chamando ela
invfunc()