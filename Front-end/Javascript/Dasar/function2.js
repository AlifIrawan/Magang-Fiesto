function luasLingkaran(r){
	function get_pi(){
		return Math.PI*r;
	}
	return 2*get_pi();
}
var result = luasLingkaran(10);

console.log(result);