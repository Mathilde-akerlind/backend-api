<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");

$json = json_encode(array(
  array(
    "id" => "1",
    "title" => "Hooded sweatshirt black",
    "description" => "Acne Studios black oversized hooded sweatshirt is made of organic cotton with a face patch and ribbed details.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dw80d4584f/images/CI/CI0079-/1500x/CI0079-900_UNISEX-WOMAN_A.jpg",
    "price" => "2700",
    "category" => "Sweatshirts",
  ),
  array(
    "id" => "2",
    "title" => "Crew neck t-shirt blush pink",
    "description" => "Acne Studios blush pink crew neck t-shirt is made from organic cotton with a regular fit and a face logo patch.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dwcb35ab90/images/25/25E173-/1500x/25E173-++1_UNISEX-WOMAN_A.jpg",
    "price" => "1000",
    "category" => "T-shirts",
  ),
  array(
    "id" => "3",
    "title" => "Crew neck sweatshirt powder pink",
    "description" => "Acne Studios powder blue crew neck sweatshirt is made of organic cotton with a face patch and ribbed details.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dw22ec6994/images/CI/CI0076-/1500x/CI0076-AQO_UNISEX-WOMAN_A.jpg",
    "price" => "2000",
    "category" => "Sweatshirts",
  ),
  array(
    "id" => "4",
    "title" => "Logo crossbody bag black",
    "description" => "Acne Studios black crossbody bag is made from technical ripstop and features a silver-tone metal logo plaque with a face motif in black. It has a front zipper pocket, mesh pocket, and an adjustable buckle strap.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dwaee03e17/images/C1/C10093-/1500x/C10093-900_A.jpg",
    "price" => "1400",
    "category" => "Bags",
  ),
  array(
    "id" => "5",
    "title" => "Short sleeved shirt indigo blue",
    "description" => "Acne Studios indigo blue short sleeved shirt is cut for a boxy fit with a cuban collar and one chest pocket featuring a scarf print on the front.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dw01960f3d/images/AC/AC0428-/1500x/AC0428-135_A.jpg",
    "price" => "3300",
    "category" => "T-shirt",
  ),
  array(
    "id" => "6",
    "title" => "Linen shorts indigo blue",
    "description" => "Acne Studios indigo blue linen shorts are cut for a relaxed fit with drawstring waist and two side pockets featuring a scarves print on both legs.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dw637ba749/images/AE/AE0049-/1500x/AE0049-135_A.jpg",
    "price" => "3300",
    "category" => "Shorts",
  ),
  array(
    "id" => "7",
    "title" => "Nylon sweater apricot orange",
    "description" => "Acne Studios apricot orange sheer sweater is made of ribbed, glittering nylon.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dw53e571e0/images/A6/A60278-/1500x/A60278-AC6_A.jpg",
    "price" => "3000",
    "category" => "Knitwear",
  ),
  array(
    "id" => "8",
    "title" => "Leather sandals black",
    "description" => "Acne Studios black sandals are made of calf leather, featuring a metal heel.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dw17a064f8/images/DA/++0385-/1500x/++0385-900_A.jpg",
    "price" => "4600",
    "category" => "Shoes",
  ),
  array(
    "id" => "9",
    "title" => "Linen sandals ecru beige",
    "description" => "Acne Studios ecru beige sandals are made of fringed linen featuring a metal heel.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dwa0ff0d61/images/DA/++0384-/1500x/++0384-AE9_A.jpg",
    "price" => "5600",
    "category" => "Shoes",
  ),
  array(
    "id" => "10",
    "title" => "Small messenger bag black/blue",
    "description" => "Acne Studios black/blue durable small messenger bag has an adjustable hard plastic buckle closure and Acne Studios logo tab.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dwba35b0a7/images/C1/C10090-/1500x/C10090-AHJ_A.jpg",
    "price" => "1200",
    "category" => "Bags",
  ),
  array(
    "id" => "11",
    "title" => "Bootcut fit jeans mid blue",
    "description" => "Acne Studios mid blue jeans are made from rigid denim with a mid rise and a bootcut leg.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dw20e97e4c/images/A0/A00267-/1500x/A00267-863_A.jpg",
    "price" => "2600",
    "category" => "Jeans",
  ),
  array(
    "id" => "12",
    "title" => "Silk chiffon dress sky blue",
    "description" => "Acne Studios sky blue modified shirt dress is made of silk chiffon with an asymmetric button closure.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dw49e201e3/images/A2/A20302-/1500x/A20302-AAS_A.jpg",
    "price" => "6100",
    "category" => "Dresses",
  ),
  array(
    "id" => "13",
    "title" => "Crinkled crepe dress mid blue",
    "description" => "Acne Studios mid blue asymmetric hem dress is made of a crinkled viscose/silk blend crepe with a relaxed fit.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dw6e2f5950/images/A2/A20282-/1500x/A20282-863_A.jpg",
    "price" => "5400",
    "category" => "Dresses",
  ),
  array(
    "id" => "14",
    "title" => "Crinkled gauze skirt white",
    "description" => "Acne Studios white floor length wrap skirt is made of a cotton blend.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dwcaade27c/images/AF/AF0197-/1500x/AF0197-100_A.jpg",
    "price" => "8000",
    "category" => "Skirts",
  ),
  array(
    "id" => "15",
    "title" => "Webbing tote bag mint green",
    "description" => "Acne Studios mint green canvas tote bag is made of cotton with webbing shoulder straps and carrying handles.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dw1eefae01/images/C1/C10082-/1500x/C10082-AB9_A.jpg",
    "price" => "6100",
    "category" => "Bags",
  ),
  array(
    "id" => "16",
    "title" => "Small leather bag white/blue",
    "description" => "Acne Studios white/blue small bag features twisted knots inspired by traditional Japanese obi sashes. It has a debossed logo and snap button closure, which opens to reveal a zipper compartment for storing small essentials. In collaboration with Ben Quinn.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dw499e7833/images/A1/A10179-/1500x/A10179-AMC_A.jpg",
    "price" => "10000",
    "category" => "Bags",
  ),
  array(
    "id" => "17",
    "title" => "Bucket bag black/brown",
    "description" => "Acne Studios black/brown bucket bag is made of leather.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dw45f58c48/images/A1/A10145-/1500x/A10145-AHD_A.jpg",
    "price" => "9900",
    "category" => "Bags",
  ),
  array(
    "id" => "18",
    "title" => "Suede sandals orange",
    "description" => "Acne Studios orange sandals are made of calf suede leather. The size runs larger, please take a size smaller than usual.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dw447da561/images/DA/++0392-/1500x/++0392-AC4_A.jpg",
    "price" => "3700",
    "category" => "Shoes",
  ),
  array(
    "id" => "19",
    "title" => "Oversized denim jacket mid blue",
    "description" => "Acne Studios rodeo blue jacket is crafted from rigid denim that's treated with a stone wash for a worn-in appeal. It's crafted to an oversized silhouette with dropped shoulders and an extended hem, then fitted with an array of slip and patch pockets.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dwf4c9b892/images/C9/C90062-/1500x/C90062-863_UNISEX-WOMAN_A.jpg",
    "price" => "3600",
    "category" => "Jackets",
  ),
  array(
    "id" => "20",
    "title" => "Quilted down jacket black",
    "description" => "Acne Studios black quilted down jacket is made of nylon with Acne Studios branding at the chest.",
    "image" => "https://www.acnestudios.com/on/demandware.static/-/Sites-acne-product-catalog/default/dwd5868079/images/A9/A90348-/1500x/A90348-900_A.jpg",
    "price" => "6900",
    "category" => "Jackets"
  )
), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);


echo $json;
