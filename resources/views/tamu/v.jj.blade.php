.contact .card {
  width: 100%;
  height: 100%;
  background: #fff;
  box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
  padding: 30px;
  border-radius: 0 10px 10px 0;
}

.contact .card .form-group {
  padding-bottom: 8px;
}

.contact .card .error-message {
  display: none;
  color: #fff;
  background: #df1529;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .card .error-message br+br {
  margin-top: 25px;
}

.contact .card .sent-message {
  display: none;
  color: #fff;
  background: #059652;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .card .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .card .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #059652;
  border-top-color: #fff;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .card input,
.contact .card textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .card input[type=text],
.contact .card input[type=email],
.contact .card textarea {
  padding: 12px 15px;
}

.contact .card input[type=text]:focus,
.contact .card input[type=email]:focus,
.contact .card textarea:focus {
  border-color: var(--color-primary);
}

.contact .card textarea {
  padding: 10px 12px;
}

.contact .card button[type=submit] {
  background: var(--color-primary);
  border: 0;
  padding: 14px 45px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .card button[type=submit]:hover {
  background: rgba(0, 131, 116, 0.8);
}