$(function(){var g="metric";$(".change_imperial").on("click",function(){$(".metric_units").hide(),$(".imperial_units").show(),$(".calculateBodyFat").attr("class"),$(".calculateBodyFat").removeClass("calculateBodyFat").addClass("calculateBodyFatImperial"),$(".calculateBMI").attr("class"),$(".calculateBMI").removeClass("calculateBMI").addClass("calculateBMIImperial"),g="imperial",$("#female").is(":checked")&&$(".hip_"+g).show()}),$(".change_metric").on("click",function(){$(".imperial_units").hide(),$(".metric_units").show(),$(".calculateBodyFatImperial").removeClass("calculateBodyFatImperial").addClass("calculateBodyFat"),$(".metric_units").show(),$(".calculateBMIImperial").removeClass("calculateBMIImperial").addClass("calculateBMI"),g="metric",$("#female").is(":checked")&&$(".hip_"+g).show()}),$(document).on("click",".gender",function(){$(this).attr("id")=="female"?$(".hip_"+g).show():($(".hip_metric").hide(),$(".hip_imperial").hide())}),$(document).on("click",".calculateBodyFat",function(){let e=1;$("#male").is(":checked")?e=1:$("#female").is(":checked")&&(e=0);let a=$("#age").val(),i=$("#height").val(),r=$("#weight").val();if(a==""||i==""||r=="")return;let o=r/(i/100*(i/100)),s=parseFloat($("#neck").val()),n=parseFloat($("#waist").val()),f=parseFloat($("#hip").val()),u=!1;if(e==1?u=!isNaN(s)&&!isNaN(n):u=!isNaN(s)&&!isNaN(n)&&!isNaN(f),u){let t=0;e==1?t=Math.log10(n-s):t=Math.log10(n+f-s);let h=Math.log10(i),c=0;e==1?c=495/(1.0324-.190747*t+.15456*h)-450:c=495/(1.29579-.35004*t+.221*h)-450;let p=Number(c.toFixed(2));$(".result").text(p+"%")}else{let t=0;a<=15?t=1.51*o+.7*a-3.6*e+1.4:t=1.2*o+.23*a-10.8*e-5.4;let h=Number(t.toFixed(2));$(".result").text(h+"%")}}),$(document).on("click",".calculateBodyFatImperial",function(){let e=1;$("#male").is(":checked")?e=1:$("#female").is(":checked")&&(e=0);let a=$("#age").val(),i=$("#foot").val(),r=$("#inch").val(),o=$("#pound").val();if(a==""||i==""||r==""||o=="")return;let s=i*12+parseFloat(r),n=s*.0254,u=o*.45359237/(n*n),t=parseFloat($("#neck_foot").val()),h=parseFloat($("#neck_inch").val());isNaN(t)&&(t=0);let c=0;isNaN(h)?c=t*12:c=t*12+h;let p=parseFloat($("#waist_foot").val()),_=parseFloat($("#waist_inch").val());isNaN(p)&&(p=0);let d=0;isNaN(_)?d=p*12:d=p*12+_;let F=!0,N=0;if(e==1)F=c==0||d==0;else{let l=parseFloat($("#hip_foot").val());isNaN(l)&&(l=0);let m=parseFloat($("#hip_inch").val());isNaN(m)?N=l*12:N=l*12+m,F=c==0||d==0||N==0}if(F){let l=0;a<=15?l=1.51*u+.7*a-3.6*e+1.4:l=1.2*u+.23*a-10.8*e-5.4;let m=Number(l.toFixed(2));$(".result").text(m+"%")}else{let l=0;e==1?l=Math.log10(d-c):(console.log(d+N-c),l=Math.log10(d+N-c));let m=Math.log10(s),v=0;e==1?v=86.01*l-70.041*m+36.76:v=163.205*l-97.684*m-78.387;let I=Number(v.toFixed(2));$(".result").text(I+"%")}}),$(document).on("click",".calculateBMI",function(){let e=$("#height").val(),i=$("#weight").val()/(e/100*(e/100)),r=Number(i.toFixed(2));$(".result").text(r);let o=r/25,s=Number(o.toFixed(2));$(".result_prime").text(s)}),$(document).on("click",".calculateBMIImperial",function(){let e=$("#foot").val(),a=$("#inch").val(),i=$("#pound").val(),o=(e*12+parseInt(a))*.0254,n=i*.45359237/(o*o),f=Number(n.toFixed(2));$(".result").text(f);let u=f/25,t=Number(u.toFixed(2));$(".result_prime").text(t)})});
