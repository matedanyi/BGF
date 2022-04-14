$("#add").click(function () {
    let index = $(".parts").length;
    let index2 = $(".materials").length;
    let index3 = $(".numbers").length;

    //let partDiv = $("#part_div > div > input ");
    let partDiv = $("#part_div").html();
    // partDiv = partDiv.replace("gameparts[0][name]","gameparts["+index+"][name]");
    let materialDiv = $("#material_div").html();
    let numberDiv = $("#number_div").html();

    let part =
        "<div class='col-5 parts'>" +
        partDiv.replace(
            "gameparts[0][name]",
            "gameparts[" + index + "][name]"
        ) +
        "</div>";

    let material =
        "<div class='col-4 materials'>" +
        materialDiv.replace(
            "gameparts[0][material_id]",
            "gameparts[" + index2 + "][material_id]"
        ) +
        "</div>";

    let number =
        "<div class=' col-2 numbers'>" +
        numberDiv.replace(
            "gameparts[0][quantity]",
            "gameparts[" + index3 + "][quantity]"
        ) +
        "</div>";

    $("#all_div").append(part);
    $("#all_div").append(material);
    $("#all_div").append(number);

    /*console.log(index);
    console.log(index2);
    console.log(index3);*/
    console.log(partDiv);
    console.log(materialDiv);
    console.log(numberDiv);
});
