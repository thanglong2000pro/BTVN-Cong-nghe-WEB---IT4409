
function send()
			{
				if(document.myform.title_input.value.trim()=="")
				{
					alert("Please enter blog's title");
				}else if(document.myform.content_input.value.trim()=="")
				{
					alert("Please enter blog's content");
				}else{
					var title=escape(document.myform.title_input.value);
					var content=escape(document.myform.content_input.value);
					var time=new Date().getTime;
					localStorage.setItem("title",title);
					localStorage.setItem("content",content);
					localStorage.setItem("time", time);
				}
			}