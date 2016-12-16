
namespace Jamjan;

class PaddingTest {

    public function test(int padding=1000) -> string {
        var s;
        var a;
        var val;
        array ar;

        let ar = [];

        let s = str_pad("a", padding, ".b") . ".c";
        let a = array_pad(ar, padding, "wrong");
        let a["c"] = "right";

        let val = current(array_intersect_key(a, array_flip(explode(".", s))));

        return val;
    }

    public function testSimplified(int padding=1000) -> string {
            var s;
            var a;
            var val;
            array ar;
            var ar_exploded;
            var ar_flipped;
            var ar_intersected;

            let ar = [];

            let s = str_pad("a", padding, ".b") . ".c";
            let a = array_pad(ar, padding, "wrong");
            let a["c"] = "right";

            // decouple:
            let ar_exploded = explode(".", s);
            let ar_flipped = array_flip(ar_exploded);
            let ar_intersected = array_intersect_key(a, ar_flipped);

            let val = current(ar_intersected);

            return val;
        }

}