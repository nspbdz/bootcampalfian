let a = prompt('uang yang harus dibayar oleh anda'),
    b = prompt('uang anda');
let kembalian=function(b,u){
    let k = u-b;
    let pec = [50000,20000,10000,5000,2000,1000,500,200,100,10];
    console.log('jumlah bayar        : Rp.'+b+'\n');
    console.log('uang dibayrkan      : Rp.'+u+'\n');
    console.log('kembalian           : Rp.'+k+'\n');
    console.log('rincian             : \n');
    for (let i = 0; i < pec.length; i++) {
        x=0;
        while (k>=pec[i]){
            k -= pec[i];
            x++;
        } 
        if (x>0){
            console.log(''+x+'lembar Rp.'+pec[i]);
        }   
    }
}
kembalian(a,b);

