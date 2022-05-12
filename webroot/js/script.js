$(document).ready(function () {
    console.log($(window).width());

    if (localStorage.getItem("panel") == "closed") {
        $("#thirddiv").addClass("rejtett");
    }

    $("#panel-zaro").click(function () {
        $("#thirddiv").animate(
            {
                width: "0px",
            },
            0,
            function () {
                $("#thirddiv").addClass("d-lg-none");
                $("#thirddiv").removeClass("d-lg-block");
                $("#forthdiv").removeClass("col-lg-10");
            }
        );

        localStorage.setItem("panel", "closed");
    });

    $("#panel-nyito").click(function () {
        $("#forthdiv").addClass("col-lg-10");
        $("#thirddiv").removeClass("d-lg-none");
        $("#thirddiv").addClass("d-lg-block");
        $("#thirddiv").animate(
            {
                width: "16.66%",
            },
            0,
            function () {
                localStorage.setItem("panel", "opened");
            }
        );
    });

    $("main");
    let loading = $("#loading").hide();
    $(document)
        .ajaxStart(function () {
            loading.show();
        })
        .ajaxStop(function () {
            loading.hide();
        });







    /*  let lifetimeList = $("td.lifetd").find("td").prevObject;
    console.log(lifetimeList[0].innerHTML);
    for (let i in lifetimeList) {
        console.log(lifetimeList[i]);

        let lifetime = lifetimeList[i].innerHTML;
        if (lifetime) {
            let lifetimeNum = lifetime.split(" ");
            console.log(Number(lifetimeNum[0]));
            if (Number(lifetimeNum[0]) > 10) {
                console.log("múködik");
                lifetimeList[i].addClass("tdOldTool");
            }
        }
    }*/



    /*==================== GENERATE PDF ====================*/
    // PDF generated area

    let areaExport = document.getElementById('area-export')
    let exportButton = document.getElementById('export-button')

    // Html2pdf options
    let opt = {
        margin: 0,
        filename: 'export.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 4 },
        jsPDF: { format: 'a4', orientation: 'landscape' }
    }

    // Function to call areaExport and Html2Pdf options
    function generatResume() {
        html2pdf(areaExport, opt)
    }


    // When the button is clicked, it executes the three functions
    exportButton.addEventListener('click', () => {
        // 1. The PDF is generated
        generatResume()
    })

});

