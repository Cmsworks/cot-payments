<!-- BEGIN: MAIN -->

<div class="breadcrumb">{PHP.L.payments_mybalance}</div>

<div class="row">
	<div class="span9">
		
		<!-- IF {PHP.cfg.payments.balance_enabled} -->
		<h4>{PHP.L.payments_balance}: {BALANCE_SUMM|number_format($this, '2', '.', ' ')} {PHP.L.valuta}</h4>
		<!-- ENDIF -->
		
		<br/>
		<br/>
		<ul class="nav nav-tabs">
			<li<!-- IF {PHP.n} == 'history' --> class="active"<!-- ENDIF -->><a href="{BALANCE_HISTORY_URL}">{PHP.L.payments_history}</a></li>
			<!-- IF {PHP.cfg.payments.balance_enabled} -->
			<li<!-- IF {PHP.n} == 'billing' --> class="active"<!-- ENDIF -->><a href="{BALANCE_BILLING_URL}">{PHP.L.payments_paytobalance}</a></li>
			<!-- ENDIF -->
		</ul>		
		
		<!-- BEGIN: BILLINGFORM -->
		<h5>{PHP.L.payments_balance_billing_desc}</h5>
		<form action="{BALANCE_FORM_ACTION_URL}" method="post">
			<p>{PHP.L.payments_balance_billing_summ}: <input type="text" name="summ" size="5" value="{BALANCE_FORM_SUMM}"/> {PHP.L.valuta}</p>
			<p><button class="btn btn-success">{PHP.L.payments_paytobalance}</button></p>
		</form>
		<!-- END: BILLINGFORM -->
		
		<!-- BEGIN: HISTORY -->
		<h5>{PHP.L.payments_history}</h5>
		<table class="table">
			<!-- BEGIN: HIST_ROW -->
			<tr>
				<td>{HIST_ROW_ID}</td>
				<td><!-- IF {HIST_ROW_AREA} == 'balance' -->+<!-- ELSE -->-<!-- ENDIF --></td>
				<td>{HIST_ROW_PDATE|cot_date('d.m.Y H:i', $this)}</td>
				<td>{HIST_ROW_DESC}</td>
				<td style="text-align: right;">{HIST_ROW_SUMM|number_format($this, '2', '.', ' ')} {PHP.L.valuta}</td>
			</tr>
			<!-- END: HIST_ROW -->
		</table>
		<!-- END: HISTORY -->
		
	</div>
	<div class="span3">
		
	</div>
</div>

<!-- END: MAIN -->