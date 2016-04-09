var Avatar = React.createClass({
  render: function() {
    return (
		<div>
			<h1>Hello, world!</h1>
			<p>这是段落</p>
		</div>
    );
  }
});

React.render(
  <Avatar/>,
  document.getElementById('example')
);
var add = {"name":"asdfasd"};
var Divbox = React.createClass({
	testclick : function(){
		
	},
	render:function(){

		return (
			<div className="asdf" data-id="zsdg" >
				<input type="text"  className="form-control" data-type="u" name="user" value="" placeholder="手机号 / 邮箱 / 账户"/>
				<div>{add.name}</div>
				<div><a href="javascript:void(0);" onClick="testclick()">diansji</a></div>
			</div>
		);
	}
});

React.render(
	<Divbox/>,
	document.getElementById('continer')
);
