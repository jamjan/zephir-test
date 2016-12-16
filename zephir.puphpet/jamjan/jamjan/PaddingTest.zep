namespace Jamjan;

class PaddingTest {

    public function test(int padding=1000) -> string {
        var s;
        var a;
        var val;
        array ar;
        var exploded;

        let ar = [];

        let s = str_pad("a", padding, ".b") . ".c";
        let a = array_pad(ar, padding, "wrong");
        let a["c"] = "right";

        let exploded = explode(".", s);

        let val = current(array_intersect_key(a, array_flip(explode(".", s))));

        return val;
    }

}