function multiplyBy()
{       
       numFormulaAsh = 0.0056;
        
        num1 = document.getElementById("AshLe_mm").value;
        num2 = document.getElementById("AshWi_mm").value;
        num3 = document.getElementById("AshTh_mm").value;

        result111 = numFormulaAsh * num1 * num2 * num3;
        result11 = result111.toFixed(2);  
        document.getElementById("result").innerHTML = result11;
        
}

function multiplyBycherry()
{       
        numFormulaCherry = 0.008;
        
        num1 = document.getElementById("cherryLe_mm").value;
        num2 = document.getElementById("cherryWi_mm").value;
        num3 = document.getElementById("cherryTh_mm").value;

        result222 = numFormulaCherry * num1 * num2 * num3;
        result22 = result222.toFixed(2);
        document.getElementById("result2").innerHTML = result22;
       
}

function multiplyByWalnut()
{       
        numFormulaWalnut = 0.02;
        
        num1 = document.getElementById("walnutLe_mm").value;
        num2 = document.getElementById("walnutWi_mm").value;
        num3 = document.getElementById("walnutTh_mm").value;

        result333 = numFormulaWalnut * num1 * num2 * num3;
        result33 = result333.toFixed(2);
        document.getElementById("result3").innerHTML = result33;
}

function multiplyByOak()
{       
        numFormulaOak = 0.01;
        
        num1 = document.getElementById("oakLe_mm").value;
        num2 = document.getElementById("oakWi_mm").value;
        num3 = document.getElementById("oakTh_mm").value;
        
        result444 = numFormulaOak * num1 * num2 * num3;
        result44 = result444.toFixed(2);
        document.getElementById("result4").innerHTML = result44;
}

function multiplyByBeech()
{       
        numFormulaBeech = 0.012;
        
        num1 = document.getElementById("beechLe_mm").value;
        num2 = document.getElementById("beechWi_mm").value;
        num3 = document.getElementById("beechTh_mm").value;
        
        result555 = numFormulaBeech * num1 * num2 * num3;
        result55 = result555.toFixed(2);
        document.getElementById("result5").innerHTML = result55;
}

function multiplyByMaple()
{       
        numFormulaMaple = 0.03;
        
        num1 = document.getElementById("mapleLe_mm").value;
        num2 = document.getElementById("mapleWi_mm").value;
        num3 = document.getElementById("mapleTh_mm").value;
        
        result666 = numFormulaMaple * num1 * num2 * num3;
        result66 = result666.toFixed(2);
        document.getElementById("result6").innerHTML = result66;
}





function CalculateNumBench() {
       let beech = document.getElementById('bench').value
       document.getElementById('result7').innerHTML = beech * 280.00;      
}

function CalculateNumScrewdriver() {
        let screwdriver = document.getElementById('screwdriver').value
        document.getElementById('result8').innerHTML = screwdriver * 12.00;
}

function CalculateNumHammer() {
        let screwdriver = document.getElementById('hammer').value
        document.getElementById('result9').innerHTML = screwdriver * 11.00;
}

function CalculateNumCircularSaw() {
        let circularsaw = document.getElementById('circularsaw').value
        document.getElementById('result10').innerHTML = circularsaw * 168.00;
}

function CalculateNumChisel() {
        let chisel = document.getElementById('chisel').value
        document.getElementById('result11').innerHTML = chisel * 6.00;
}

function CalculateNumSaw() {
        let saw = document.getElementById('saw').value
        document.getElementById('result12').innerHTML = saw * 8.00;
}

elements.addEventListener (onpageshow, elemRemoveFrom, useCapture);

function elemRemoveFrom() {
        if (elements === true) {
                document.getElementsByClassName('buyNow').removeAttribute('href');
        }


}

function search_items() {
        
        const searchBox = document.getElementsByClassName('searchInput').value.toUpperCase();
        const nameOfProduct =  document.querySelectorAll('div[property=name]');
        const bname = document.getElementsByTagName('b')

        for(let i = 0; i < bname.length; i++) {
                let
        }
}

