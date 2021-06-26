#!/usr/bin/env python3
import hashlib
from urllib.parse import quote_plus
from lib.core.enums import PRIORITY

def tamper(payload, **kwargs):
	h = hashlib.md5("hie0shah6ooNoim{}".format(payload).encode()).hexdigest()
	retVal = "{}&h={}".format(quote_plus(payload), h)
	return retVal
