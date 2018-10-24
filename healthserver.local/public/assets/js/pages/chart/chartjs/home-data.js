
$(document).ready(function() {
	var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };


    var all = $("#pie_student_data").attr("data-all-student");
    var adse = $("#pie_student_data").attr("data-adse-student");
    var cpism = $("#pie_student_data").attr("data-cpism-student");
    var dism = $("#pie_student_data").attr("data-dism-student");
    var msoffice = $("#pie_student_data").attr("data-msoffice-student");
    var ittest = $("#pie_student_data").attr("data-ittest-student");
    var ccna = $("#pie_student_data").attr("data-ccna-student");
    var other = $("#pie_student_data").attr("data-others-student");


    var ScalingFactor = function(data , total) {
        return Math.round((data * 100) / total);
    };

    var config = {
        type: 'pie',
    data: {
        datasets: [{
            data: [
                ScalingFactor(adse , all) ,
                ScalingFactor( cpism, all),
                ScalingFactor( dism, all),
                ScalingFactor( msoffice, all),
                ScalingFactor( ittest, all),
                ScalingFactor( ccna, all),
                ScalingFactor( other, all)
            ],
            backgroundColor: [
                "#FF6699",
                window.chartColors.orange,
                window.chartColors.yellow,
                "#00FFFF",
                window.chartColors.blue,
                window.chartColors.purple,
                "#3399FF",
            ],
            label: 'Dataset 1'
        }],
        labels: [
            "ADSE",
            "CPISM",
            "DISM",
            "MS OFFICE",
            "IT TEST",
            "CCNA",
            "OTHERS"
        ]
    },
    options: {
        responsive: true
    }
};

    var ctx = document.getElementById("chartjs_pie").getContext("2d");
    window.myPie = new Chart(ctx, config);
});
