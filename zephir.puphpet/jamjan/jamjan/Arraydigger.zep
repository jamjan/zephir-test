namespace Jamjan;

class Arraydigger {

    public function extract_data(array resource_data,string path, string delimiter = ".") -> string | int | bool | null {
        var path_exploded;
        array copy;
        var value;
        var _value;

        let path_exploded = explode(delimiter,path);

        if ( ! empty(path_exploded)) {
            let copy = resource_data;
            for value in path_exploded {
                let _value = value;
                if(isset(copy[_value])) {
                    let copy = copy[_value];
                } else {
                    return null;
                }
            }
            return copy;
        } else {
            return null;
        }
    }
}