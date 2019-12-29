//課題1、2
var answer = prompt('数字を入力');
if (answer > 0) {
    alert('正の数');
} else if (answer < 0){
    alert('負の数');
} else if (answer == 0) {
    alert('正の数、負の数どちらでもない');
} else {
    alert('数値を入力してください');
}

//課題3、4、5
var animals1 = ['パンダ','ライオン','キリン']
var i = 0;
var lion = prompt('ライオンと入力');
while (i < animals1.length) {
    if (lion == 'ライオン') {
        if (animals1[i] == lion) {
            alert('ライオンの添字は' + i);
            break;
        }
    }
    alert(animals1[i]);
    i++;
}

//課題6、7
var animals2 = [
    {'name': 'パンダ', 'weight': '80kg'},
    {'name': 'ライオン', 'weight': '200kg'},
    {'name': 'キリン', 'weight': '300kg'}
];
var animal = prompt('パンダ、ライオン、キリン、いずれかの名前を入力');
switch (animal) {
    case 'パンダ':
        alert('体重は' + animals2[0].weight);
        break;
    case 'ライオン':
        alert('体重は' + animals2[1].weight);
        break;
    case 'パンダ':
        alert('体重は' + animals2[2].weight);
        break;
    default:
        alert('動物名を入力してください');
        break;
}

//課題8
function pi(x) {
    return x * x * 3.14;
}
var num = prompt('半径を入力');
alert(pi(num));
