<?php
print_r($_GET);
if (isset($_GET['uf'])) {
    switch ($_GET['uf']) {
        case 'AC':
        case 'AM':
        case 'AP':
        case 'PA':
        case 'RO':
        case 'RR':
        case 'TO':
            print('Norte');
            break;
        case 'AL':
        case 'BA':
        case 'CE':
        case 'MA':
        case 'PB':
        case 'PE':
        case 'PI':
        case 'RN':
        case 'SE':
            print('Nordeste');
            break;
        case 'DF':
        case 'GO':
        case 'MT':
        case 'MS':
            print('Centro-Oeste');
            break;
        case 'ES':
        case 'MG':
        case 'RJ':
        case 'SP':
            print('Sudeste');
            break;
        case 'PR':
        case 'RS':
        case 'SC':
            print('Sul');
            break;
        default:
            print('Não encontrada');
            break;
    }
} else {
    print('$_GET nao existe');
}
