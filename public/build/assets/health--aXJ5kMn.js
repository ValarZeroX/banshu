$(function(){var d="metric";$(".change_imperial").on("click",function(){$(".metric_units").hide(),$(".imperial_units").show(),$(".calculateBodyFat").attr("class"),$(".calculateBodyFat").removeClass("calculateBodyFat").addClass("calculateBodyFatImperial"),$(".calculateBMI").attr("class"),$(".calculateBMI").removeClass("calculateBMI").addClass("calculateBMIImperial"),$(".calculateBMR").attr("class"),$(".calculateBMR").removeClass("calculateBMR").addClass("calculateBMRImperial"),$(".calculateTDEE").attr("class"),$(".calculateTDEE").removeClass("calculateTDEE").addClass("calculateTDEEImperial"),d="imperial",$("#female").is(":checked")&&$(".hip_"+d).show()}),$(".change_metric").on("click",function(){$(".imperial_units").hide(),$(".metric_units").show(),$(".calculateBodyFatImperial").removeClass("calculateBodyFatImperial").addClass("calculateBodyFat"),$(".calculateBMIImperial").removeClass("calculateBMIImperial").addClass("calculateBMI"),$(".calculateBMRImperial").removeClass("calculateBMRImperial").addClass("calculateBMR"),$(".calculateTDEEImperial").removeClass("calculateTDEEImperial").addClass("calculateTDEE"),d="metric",$("#female").is(":checked")&&$(".hip_"+d).show()}),$(document).on("click",".gender",function(){$(this).attr("id")=="female"?$(".hip_"+d).show():($(".hip_metric").hide(),$(".hip_imperial").hide())}),$(document).on("click",".calculateBodyFat",function(){let e=1;$("#male").is(":checked")?e=1:$("#female").is(":checked")&&(e=0);let t=$("#age").val(),l=$("#height").val(),a=$("#weight").val();if(t==""||l==""||a=="")return;let i=a/(l/100*(l/100)),c=parseFloat($("#neck").val()),n=parseFloat($("#waist").val()),u=parseFloat($("#hip").val()),s=!1;e==1?s=!isNaN(c)&&!isNaN(n):s=!isNaN(c)&&!isNaN(n)&&!isNaN(u);let r=0;if(s){let h=0;e==1?h=Math.log10(n-c):h=Math.log10(n+u-c);let p=Math.log10(l);e==1?r=495/(1.0324-.190747*h+.15456*p)-450:r=495/(1.29579-.35004*h+.221*p)-450}else t<=15?r=1.51*i+.7*t-3.6*e+1.4:r=1.2*i+.23*t-10.8*e-5.4;let o=Number(r.toFixed(2));$(".result").text(o+"%");let f="";e==1?f=I(o,t):f=M(o,t),$(".result_1").text(f)}),$(document).on("click",".calculateBodyFatImperial",function(){let e=1;$("#male").is(":checked")?e=1:$("#female").is(":checked")&&(e=0);let t=$("#age").val(),l=$("#foot").val(),a=$("#inch").val(),i=$("#pound").val();if(t==""||l==""||a==""||i=="")return;let c=l*12+parseFloat(a),n=c*.0254,s=i*.45359237/(n*n),r=parseFloat($("#neck_foot").val()),o=parseFloat($("#neck_inch").val());isNaN(r)&&(r=0);let f=0;isNaN(o)?f=r*12:f=r*12+o;let h=parseFloat($("#waist_foot").val()),p=parseFloat($("#waist_inch").val());isNaN(h)&&(h=0);let v=0;isNaN(p)?v=h*12:v=h*12+p;let w=!0,N=0;if(e==1)w=f==0||v==0;else{let m=parseFloat($("#hip_foot").val());isNaN(m)&&(m=0);let b=parseFloat($("#hip_inch").val());isNaN(b)?N=m*12:N=m*12+b,w=f==0||v==0||N==0}let g=0;if(w)t<=15?g=1.51*s+.7*t-3.6*e+1.4:g=1.2*s+.23*t-10.8*e-5.4;else{let m=0;e==1?m=Math.log10(v-f):m=Math.log10(v+N-f);let b=Math.log10(c);e==1?g=86.01*m-70.041*b+36.76:g=163.205*m-97.684*b-78.387}let k=Number(g.toFixed(2));$(".result").text(k+"%");let _="";e==1?_=I(k,t):_=M(k,t),$(".result_1").text(_)}),$(document).on("click",".calculateBMI",function(){let e=$("#height").val(),t=$("#weight").val();if(e==""||t=="")return;let l=t/(e/100*(e/100)),a=Number(l.toFixed(2));$(".result").text(a);let i=a/25,c=Number(i.toFixed(2));$(".result_prime").text(c)}),$(document).on("click",".calculateBMIImperial",function(){let e=$("#foot").val(),t=$("#inch").val(),l=$("#pound").val();if(e==""||t==""||l=="")return;let i=(e*12+parseFloat(t))*.0254,n=l*.45359237/(i*i),u=Number(n.toFixed(2));$(".result").text(u);let s=u/25,r=Number(s.toFixed(2));$(".result_prime").text(r)});function I(e,t){let l=window.health.underfat,a=window.health.healthy,i=window.health.overfat,c=window.health.obese;if(t<=39){if(e<=10)return l;if(e>10&&e<=21)return a;if(e>21&&e<=26)return i;if(e>26)return c}if(t>39&&t<=59){if(e<=11)return l;if(e>11&&e<=22)return a;if(e>22&&e<=27)return i;if(e>27)return c}if(t>59){if(e<=13)return l;if(e>13&&e<=24)return a;if(e>24&&e<=29)return i;if(e>30)return c}}function M(e,t){let l=window.health.underfat,a=window.health.healthy,i=window.health.overfat,c=window.health.obese;if(t<=39){if(e<=20)return l;if(e>21&&e<=34)return a;if(e>34&&e<=39)return i;if(e>39)return c}if(t>39&&t<=59){if(e<=21)return l;if(e>21&&e<=35)return a;if(e>35&&e<=40)return i;if(e>40)return c}if(t>59){if(e<=22)return l;if(e>22&&e<=29)return a;if(e>29&&e<=36)return i;if(e>36)return c}}$(document).on("click",".calculateBMR",function(){let e=x();if(!e)return;let t=Number(e.toFixed(2));$(".result").text(t)}),$(document).on("click",".calculateBMRImperial",function(){let e=E();if(!e)return;let t=Number(e.toFixed(2));$(".result").text(t)}),$("#equation").change(function(){$(this).val()==3?$(".equation_fat").show():$(".equation_fat").hide()});function x(){let e=1;$("#male").is(":checked")?e=1:$("#female").is(":checked")&&(e=0);let t=$("#age").val(),l=$("#height").val(),a=$("#weight").val(),i=$("#equation").val();if(t==""||l==""||a=="")return!1;let c=0,n=0,u=0;if(i==1&&(n=10*a+6.25*l-5*t+5,u=10*a+6.25*l-5*t-161),i==2&&(n=13.397*a+4.799*l-5.677*t+88.362,u=9.247*a+3.098*l-4.33*t+447.593),i==3){let s=$("#body_fat").val();if(s=="")return!1;let r=370+21.6*(1-s/100)*a;n=r,u=r}return e==1?c=n:c=u,c}function E(){let e=1;$("#male").is(":checked")?e=1:$("#female").is(":checked")&&(e=0);let t=$("#age").val(),l=$("#foot").val(),a=$("#inch").val(),i=$("#pound").val(),c=$("#equation").val();if(t==""||l==""||a==""||i=="")return!1;let u=(l*12+parseFloat(a))*2.54,s=i*.45359237,r=0,o=0,f=0;if(c==1&&(o=10*s+6.25*u-5*t+5,f=10*s+6.25*u-5*t-161),c==2&&(o=13.397*s+4.799*u-5.677*t+88.362,f=9.247*s+3.098*u-4.33*t+447.593),c==3){let h=$("#body_fat").val();if(h=="")return!1;let p=370+21.6*(1-h/100)*s;o=p,f=p}return e==1?r=o:r=f,r}function C(){let e=$("#activity").val(),t=1.2;switch(e){case"1":t=1.2;break;case"2":t=1.375;break;case"3":t=1.55;break;case"4":t=1.725;break;case"5":t=1.9;break;case"6":t=2.4;break;default:t=1.2;break}return t}$(document).on("click",".calculateTDEE",function(){let e=x();if(!e)return;let t=Number(e.toFixed(2));$(".result").text(t);let l=C(),a=e*l,i=Number(a.toFixed(2));$(".result_tdee").text(i)}),$(document).on("click",".calculateTDEEImperial",function(){let e=E();if(!e)return;let t=Number(e.toFixed(2));$(".result").text(t);let l=C(),a=e*l,i=Number(a.toFixed(2));$(".result_tdee").text(i)})});
